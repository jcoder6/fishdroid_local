<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\User;
use Makkari\Models\Role;

require_once "./Model/User.php";

class Users extends Controller
{
    public static function index()
    {
        // Your code here
        $isAdmin = self::validateAdmin($_SESSION['role_id']);
        if(!$isAdmin){
            self::messageNotif('error', 'You don\'t have persmission');
            header('location: /dashboard');
            die;
        }
        
        $view = new View(PAGES_PATH . "/user");

        $users = User::getAll();

        $data = array(
            'users' => $users
        );

        $view->render("manage-user", $data);
    }

    public static function create()
    {
        // Your code here
        $isAdmin = self::validateAdmin($_SESSION['role_id']);
        if(!$isAdmin){
            self::messageNotif('error', 'You don\'t have persmission');
            header('location: /dashboard');
            die;
        }

        $view = new View(PAGES_PATH . '/user');
        $roles = Role::getAll();
        $view->render('add-user');
    }

    public static function edit($id)
    {
        // Your edit code goes here
        $isAdmin = self::validateAdmin($_SESSION['role_id']);
        if(!$isAdmin and ($id != $_SESSION['user-logged'])){
            self::messageNotif('error', 'You don\'t have persmission');
            header('location: /dashboard');
            die;
        } 

        $view = new View(PAGES_PATH . '/user');
        $user = User::getById($id);
        $role = Role::getById($user->getRole_id());

        
        $data = array(
            'role_id' => $role->getId(),
            'role' => $role->getRole_name(),
            'user' => $user
        );

        $view->render("edit-user", $data);
    }

    public static function save(){
        // Your save code goes here
        $isAdmin = self::validateAdmin($_SESSION['role_id']);
        if(!$isAdmin){
            self::messageNotif('error', 'You don\'t have persmission');
            header('location: /dashboard');
            die;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $imgNewName = self::clean($_POST['default_img']);
            if(!empty($_FILES['user_photo']['name'])){
                $imgNewName = self::renameImg($_FILES['user_photo']['name'], 'USER_IMG');
                $sourcePath = $_FILES['user_photo']['tmp_name'];  
                $destinationPath = './public/assets/images/user_images/' . $imgNewName; 
                self::uploadImageDirectory($sourcePath, $destinationPath);
            } else {
                self::messageNotif('error', 'Please insert image');
                header('location: /users/create');
                die();
            }

            if($_POST['role_id'] == "0"){
                self::messageNotif('error', 'Please enter a valid role');
                header('location: /users/create');
                die();
            }
            $date = date('Y-m-d H:i:s');
            $data = array(
                self::clean($_POST['fullname']),
                self::clean($_POST['username']),
                self::clean($_POST['email']),
                self::clean($_POST['password']),
                $imgNewName,
                $date,
                intval(self::clean($_POST['role_id']))
            );
            
            $user = new User(NULL, ...$data);

            if($user->save()){
                self::messageNotif('success', 'User added successfuly');
                header('location: /users');
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /terms');
            }

        }
    }

    public static function update($id) {
        // your code goes here
        $isAdmin = self::validateAdmin($_SESSION['role_id']);
        if(!$isAdmin and ($id != $_SESSION['user-logged'])){
            self::messageNotif('error', 'You don\'t have persmission');
            header('location: /dashboard');
            die;
            // echo !$isAdmin and ($id != $_SESSION['user-logged']);
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $imgNewName = (!empty($_FILES['user_photo']['name'])) ? self::renameImg($_FILES['user_photo']['name'], 'USER_IMG') : self::clean($_POST['default_img']);

            $date = date('Y-m-d H:i:s');
            $data = array(
                'fullname' => self::clean($_POST['fullname']),
                'username' => self::clean($_POST['username']),
                'email' => self::clean($_POST['email']),
                'password' => self::clean($_POST['password']),
                'img' => $imgNewName,
                'created_at' => $date,
                'role_id' => intval(self::clean($_POST['role_id']))
            );
            
            $user = User::getById($id);
            $currentImg = $user->getImg();

            $user->setFullname($data['fullname']);
            $user->setUsername($data['username']);
            $user->setEmail($data['email']);
            $user->setPassword($data['password']);
            $user->setImg($data['img']);
            $user->setCreated_at($data['created_at']);
            $user->setRole_id($data['role_id']);

            if($user->save()){
                if(!empty($_FILES['user_photo']['name'])){
                    $sourcePath = $_FILES['user_photo']['tmp_name'];  
                    $destinationPath = './public/assets/images/user_images/' . $imgNewName; 
                    $imgPath = './public/assets/images/user_images/' . $currentImg;
                    $_SESSION['img'] = ($_SESSION['user-logged'] == $id) ? $imgNewName : $_SESSION['img'];
                    self::deleteCurrentImg($currentImg, $imgPath);
                    self::uploadImageDirectory($sourcePath, $destinationPath);
                }
                self::messageNotif('success', 'User updated successfuly');
                header('location: /dashboard');
            } else {
                echo 'failed';
            }
        }
    }

    public static function view(){
        // echo $_SESSION['user-logged'];
        $view = new View(PAGES_PATH . '/user');
        $user = User::getById($_SESSION['user-logged']);

        $role = Role::getById($user->getRole_id());

        $data = array(
            'user' => $user,
            'role' => $role->getRole_name()
        );
        
        $view->render('view-profile', $data);
    }
    
    public static function confirm($id){
        // Your code goes here
        $isAdmin = self::validateAdmin($_SESSION['role_id']);
        if(!$isAdmin){
            self::messageNotif('error', 'You don\'t have persmission');
            header('location: /dashboard');
            die;
        }

        $view = new View(PAGES_PATH . '/user');
        $user = User::getById($id);
        $users = User::getAll();

        $data = array(
            'id' => $id,
            'users' => $users
        );

        $view->render("delete-user", $data);
    }

    public static function delete($id){
        $isAdmin = self::validateAdmin($_SESSION['role_id']);
        if(!$isAdmin){
            self::messageNotif('error', 'You don\'t have persmission');
            header('location: /dashboard');
            die;
        }
        
        $user = User::getById($id);
        $currentImg = $user->getImg();
        if($user->remove()){
            $imgPath = './public/assets/images/user_images/' . $currentImg;
            self::deleteCurrentImg($currentImg, $imgPath);
            self::messageNotif('error', 'User Deleted');
            header('location: /users');
        } else {
            self::messageNotif('error', 'Something went wrong');
            header('location: /users');
        }
    }
}
