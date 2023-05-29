<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\User;

require_once "./Model/User.php";

class Users extends Controller
{
    public static function index()
    {
        // Your code here
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
        $view = new View(PAGES_PATH . '/user');
        $view->render('add-user');
    }
    public static function edit()
    {
        // Your edit code goes here
    }
    public static function save(){
        // Your save code goes here
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $imgNewName = self::clean($_POST['default_img']);
            if(!empty($_FILES['user_photo']['name'])){
                $imgNewName = self::renameImg($_FILES['user_photo']['name'], 'USER_IMG');
                $sourcePath = $_FILES['user_photo']['tmp_name'];  
                $destinationPath = './public/assets/images/user_images/' . $imgNewName; 
                self::uploadImageDirectory($sourcePath, $destinationPath);
            } else {
                self::messageNotif('error', 'Please insert image');
                self::showMessage();
            }
            $date = date('Y-m-d H:i:s');
            $data = array(
                self::clean($_POST['fullname']),
                self::clean($_POST['username']),
                self::clean($_POST['email']),
                self::clean($_POST['password']),
                $imgNewName,
                $date
            );
            
            $user = new User(NULL, ...$data);

            if($user->save()){
                header('location: /users');
            } else {
                echo 'failed';
            }

        }
    }
    
    public static function confirm(){
        // Your code goes here
    }
    public static function delete(){
        //your delete code goes here
    }
}
