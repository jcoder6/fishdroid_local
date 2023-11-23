<?php
namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\FamilyName;
use Makkari\Models\Fish;
use Makkari\Models\Fishnutrition;
use Makkari\Models\Nutrition;

require_once './Model/Nutrition.php';

class Nutritions extends Controller
{
    public static function viewNutrition($id)
    {
        $fish = Fish::getById($id);
        $nutritions = Nutrition::getAllById($id);
        $fishFamilyName = FamilyName::getById($fish->getFamily_name_id());
        $fishNutritions = Fishnutrition::getAll();
        $data = array(
            'fishID' => $id,
            'fish' => $fish,
            'familyName' => ucfirst(strtolower($fishFamilyName->getFamily_name())),
            'nutritions' => $nutritions,
            'fishNutritions' => $fishNutritions 
        );


        $view = new View(PAGES_PATH . "/nutrition");
        $view->render("manage-fish-nutrition", $data);
    }
    public static function update($fishID, $nutritionID)
    {
        // Your code here
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $isExist = Nutrition::isExist($fishID, $_POST['nutrition_id']);

            if($isExist > 0) {
                self::messageNotif('error', 'Nutrients already added');
                header('location: /nutritions/viewNutrition/' . $fishID);
                die();
            }

            $nutrition = Nutrition::getById($nutritionID);
            
            $nutrition->setnutrition_id(self::clean($_POST['nutrition_id']));

            if($nutrition->save()){
                self::messageNotif('success', 'Nutrition Updated');
                header('location: /nutritions/viewNutrition/' . $fishID);
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /nutritions/viewNutrition/' . $fishID);
            }
            
        }
    }
    public static function edit($fishID, $nutritionID)
    {
        // Your edit code goes here
        $fish = Fish::getById($fishID);
        $nutritions = Nutrition::getAllById($fishID);
        $fishFamilyName = FamilyName::getById($fish->getFamily_name_id());
        $editNutrition = Nutrition::getById($nutritionID);
        $editNutritionName = Fishnutrition::getById($editNutrition->getnutrition_id());
        $fishNutritions = Fishnutrition::getAll();


        $data = array(
            'fishID' => $fishID,
            'fish' => $fish,
            'familyName' => ucfirst(strtolower($fishFamilyName->getFamily_name())),
            'nutritions' => $nutritions,
            'editNutrition' => $editNutrition,
            'editNutriName' => $editNutritionName->getNutrition_name(),
            'fishNutritions' => $fishNutritions 
        );
        

        $view = new View(PAGES_PATH . "/nutrition");
        $view->render("edit-fish-nutrition", $data);
    }


    public static function save($fishID){
        // Your save code goes here
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_POST['nutrition_id'] == '0'){
                self::messageNotif('error', 'Please Enter Nutrients');
                header('location: /nutritions/viewNutrition/' . $fishID);
                die();
            }

            
            $data = array(
                'fish_id' => $fishID,
                'nutrition_id' => self::clean($_POST['nutrition_id'])
            );


            $isExist = Nutrition::isExist($fishID, $data['nutrition_id']);

            if($isExist > 0) {
                self::messageNotif('error', 'Nutrients already added');
                header('location: /nutritions/viewNutrition/' . $fishID);
                die();
            }
            $nutrition = new Nutrition(null, ...$data);

            

            if($nutrition->save()){
                self::messageNotif('success', 'New Nutrition Added');
                header('location: /nutritions/viewNutrition/' . $fishID);
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /nutritions/viewNutrition/' . $fishID);
            }


        }
    }
    
    public static function confirm($fishID, $nutritionID){
        $fish = Fish::getById($fishID);
        $nutritions = Nutrition::getAllById($fishID);
        $fishFamilyName = FamilyName::getById($fish->getFamily_name_id());
        $editNutrition = Nutrition::getById($nutritionID);

        $data = array(
            'fishID' => $fishID,
            'fish' => $fish,
            'familyName' => $fishFamilyName->getFamily_name(),
            'nutritions' => $nutritions,
            'editNutrition' => $editNutrition
        );

        $view = new View(PAGES_PATH . "/nutrition");
        $view->render("delete-fish-nutrition", $data);
        // Your code goes here
    }
    public static function delete($fishID, $id){
        
        //your delete code goes here
        $nutrition = Nutrition::getById($id);
        if($nutrition->remove()){
            self::messageNotif('error', 'Nutrition Deleted');
            header('location: /nutritions/viewNutrition/' . $fishID);
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /nutritions/viewNutrition/' . $fishID);
        }
    }
}
