<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\Fish;

require_once './Model/Fish.php';

class Fishes extends Controller
{
    public static function index()
    {
        $view = new View(PAGES_PATH . "/fish");

        $fishes = Fish::getAll(); 

        $data = array(
            'fishes' => $fishes
        );

        $view->render("manage-fish", $data);
    }
    public static function create()
    {
        $view = new View(PAGES_PATH . "/fish");
        $view->render("add-fish");
    }
    public static function edit($id)
    {
        $view = new View(PAGES_PATH . "/fish");

        $fish = Fish::getById($id); 

        $data = array(
            'fish' => $fish
        );

        $view->render("edit-fish", $data);
    }
    public static function save(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $imgNewName = self::clean($_POST['default_img']);
            if(!empty($_FILES['fish_image']['name'])){
                $imgNewName = self::renameImg($_FILES['fish_image']['name'], 'FISH_IMG');
                $sourcePath = $_FILES['fish_image']['tmp_name'];  
                $destinationPath = './public/assets/images/fish_images/' . $imgNewName; 
                self::uploadImageDirectory($sourcePath, $destinationPath);
            } else {
                self::messageNotif('error', 'Fish image is required');
                header('location: /fishes/create');
                die();
            }

            $data = array(
                self::clean($_POST['fish_name']),
                self::clean($_POST['scientific_name']),
                self::clean($_POST['family_name']),
                self::clean($_POST['life_span']),
                $imgNewName,
                $_POST['fish_info']
            ); 
            
            $fish = new Fish(NULL, ...$data);

            if($fish->save()){
                self::messageNotif('success', 'New fish Added');
                header('location: /fishes');   
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /fishes');
            }
        }
    }

    public static function update($id){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $imgNewName = (!empty($_FILES['fish_image']['name'])) ? self::renameImg($_FILES['fish_image']['name'], 'FISH_IMG') : self::clean($_POST['default_img']);

            $data = array(
                'fish_name' => self::clean($_POST['fish_name']),
                'scientific_name' => self::clean($_POST['scientific_name']),
                'family_name' => self::clean($_POST['family_name']),
                'life_span' => self::clean($_POST['life_span']),
                'fish_image' => $imgNewName,
                'fish_info' => $_POST['fish_info']
                
            );

            $fish = fish::getById($id);
            $currentImg = $fish->getFish_image();

            $fish->setFish_name($data['fish_name']);
            $fish->setScientific_name($data['scientific_name']);
            $fish->setFamily_name($data['family_name']);
            $fish->setLife_span($data['life_span']);
            $fish->setFish_image($data['fish_image']);
            $fish->setFish_info($data['fish_info']);

            

            if($fish->save()){
                if(!empty($_FILES['fish_image']['name'])){
                    $sourcePath = $_FILES['fish_image']['tmp_name'];  
                    $destinationPath = './public/assets/images/fish_images/' . $imgNewName; 
                    $imgPath = './public/assets/images/fish_images/' . $currentImg;
                    self::deleteCurrentImg($currentImg, $imgPath);
                    self::uploadImageDirectory($sourcePath, $destinationPath);
                }
                self::messageNotif('success', 'fish updated');
                header('location: /fishes');
            } else {
                echo 'failed';
            }
        }  
    }
    
    public static function confirm($id){
        $view = new View(PAGES_PATH . "/fish");

        $fishes = Fish::getAll();

        $data = array(
            'id' => $id,    
            'fishes' => $fishes
        ); 

        $view->render("delete-fish", $data);
    }
    public static function delete($id){
        $fish = Fish::getById($id);
        if($fish->remove()){
            self::messageNotif('error', 'fish Deleted');
            header('location: /fishes');
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /fishes'); 
        }
    }
}
