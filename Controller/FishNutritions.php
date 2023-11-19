<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\Fishnutrition;

require_once './Model/Fishnutrition.php';
class FishNutritions extends Controller
{
    public static function index()
    {
        // Your code here
        $view = new View(PAGES_PATH . "/fishnutritions");

        $fishNutritions = Fishnutrition::getAll();

        $data = array(
            'fishNutritions' => $fishNutritions,
        );

        $view->render("manage-fishnutritions", $data);
    }

    public static function edit($id)
    {
        // Your edit code goes here
        $view = new View(PAGES_PATH . "/fishnutritions");
        $nutrition = Fishnutrition::getById($id);
        $fishNutrition = Fishnutrition::getAll();

        $data = array(
            'currID' => $nutrition->getId(),
            'currNutritionName' => $nutrition->getNutrition_name(),
            'fishNutritions' => $fishNutrition
        ); 

        $view->render("edit-fishnutritions", $data);
    }

    public static function update($id)
    {
        // Your code here
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $fishNutrition = Fishnutrition::getById($id);

            $fishNutrition->setNutrition_name(self::clean($_POST['nutrition']));

            if($fishNutrition->save()){
                self::messageNotif('success', 'Nutrition updated successfuly');
                header('location: /fishnutritions');
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /fishnutritions');
            }
        }
    }

    public static function save(){
        // Your save code goes here
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nutriName = self::clean($_POST['nutrition']);
            $fishNutrition = new Fishnutrition(null, $nutriName);

            if($fishNutrition->save()){
                self::messageNotif('success', 'Nutrition added successfuly');
                header('location: /fishnutritions');
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /fishnutritions');
            }
        }
    }
    
    public static function confirm($id){
        // Your code goes here
        $view = new View(PAGES_PATH . "/fishnutritions");

        $fishNutritions = Fishnutrition::getAll();

        $data = array(
            'id' => $id,
            'fishNutritions' => $fishNutritions,
        );

        $view->render("delete-fishnutritions", $data);
    }
    public static function delete($id){
        //your delete code goes here
        $nutrition = Fishnutrition::getById($id);
        if($nutrition->remove()){
            self::messageNotif('error', 'Nutrition Deleted');
            header('location: /fishnutritions');
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /fishnutritions');
        }
    }
}
