<?php

namespace Makkari\Controllers;

use Exception;
use Makkari\Controllers\Controller;
use Makkari\Models\DashboardModel;
use Makkari\Models\FamilyName;
use Makkari\Models\Fish;

require_once './Model/Fish.php';

class Fishes extends Controller
{
    public static function index()
    {
        $count = new DashboardModel;
        $pageCount = ceil($count->getFishCount() / 15);
        $view = new View(PAGES_PATH . "/fish");

        $fishes = Fish::getLast15(); 

        $data = array(
            'pageCount' => $pageCount,
            'fishes' => $fishes
        );

        $view->render("manage-fish", $data);
    }

    public static function pages($page) {
        $count = new DashboardModel;
        $pageCount = ceil($count->getFishCount() / 15);
        $fishes = Fish::getOffset(($page - 1) * 15); 
        
        $data = array(
            'pageCount' => $pageCount,
            'fishStartCount' => ($page - 1) * 15,
            'fishes' => $fishes
        );
        
        $view = new View(PAGES_PATH . "/fish");
        $view->render("page-fish", $data);
    }

    public static function view($id) {
        $fish = Fish::getById($id);
        $familyName = FamilyName::getById($fish->getFamily_name_id());

        $data = array(
            'fish' => $fish,
            'familyName' => ucfirst(strtolower($familyName->getFamily_name()))
        );

        $view = new View(PAGES_PATH . "/fish");
        $view->render('view-fish', $data);
    }

    public static function create()
    {
        $view = new View(PAGES_PATH . "/fish");
        $familyNameData = FamilyName::getAll();
        // var_dump($familyNameData);

        $data = array(
            'familyNames' => $familyNameData
        );

        $view->render("add-fish", $data);
    }
    public static function edit($id)
    {
        $view = new View(PAGES_PATH . "/fish");

        $fish = Fish::getById($id); 
        $familyNames = FamilyName::getAll();

        $data = array(
            'familyNames' => $familyNames,
            'fish' => $fish
        );

        $view->render("edit-fish", $data);  
    }
    public static function save(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $familyNameID = 0;
            if (isset($_POST['family_name'])) {
                $familyNameID = intval(self::clean($_POST['family_name_id'])); 

                if($familyNameID == 0) {
                    self::messageNotif('error', 'Enter a valid family Name');
                    header('location: /fishes/create');
                    die();
                }
                echo $familyNameID;
            } else {
                self::messageNotif('error', 'Something went wrong try again');
                header('location: /fishes/create');
                die();
            }

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
                $familyNameID,
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

            $familyNameID = 0;
            if (isset($_POST['family_name'])) {
                $familyNameID = intval(self::clean($_POST['family_name_id'])); 

                if($familyNameID == 0) {
                    self::messageNotif('error', 'Enter a valid family Name');
                    header('location: /fishes/create');
                    die();
                }
                echo $familyNameID;
            } else {
                self::messageNotif('error', 'Something went wrong try again');
                header('location: /fishes/create');
                die();
            }

            $data = array(
                'fish_name' => self::clean($_POST['fish_name']),
                'scientific_name' => self::clean($_POST['scientific_name']),
                'family_name' => $familyNameID,
                'life_span' => self::clean($_POST['life_span']),
                'fish_image' => $imgNewName,
                'fish_info' => $_POST['fish_info']
                
            );

            $fish = fish::getById($id);
            $currentImg = $fish->getFish_image();

            $fish->setFish_name($data['fish_name']);
            $fish->setScientific_name($data['scientific_name']);
            $fish->setFamily_name_id($data['family_name']);
            $fish->setLocal_name($data['life_span']);
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

        $fishes = Fish::getLast15();

        $data = array(
            'id' => $id,    
            'fishes' => $fishes
        ); 

        $view->render("delete-fish", $data);
    }
    public static function delete($id){
        $fish = Fish::getById($id);
        if($fish->remove()){
            $currentImgPath = './public/assets/images/fish_images/' . $fish->getFish_image();
            self::deleteCurrentImg($fish->getFish_image(), $currentImgPath);
            self::messageNotif('error', 'fish Deleted');
            header('location: /fishes');
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /fishes'); 
        }
    }
}
