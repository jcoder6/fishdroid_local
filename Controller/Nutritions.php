<?php
namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\FamilyName;
use Makkari\Models\Fish;
use Makkari\Models\Nutrition;

require_once './Model/Nutrition.php';

class Nutritions extends Controller
{
    public static function viewNutrition($id)
    {
        $fish = Fish::getById($id);
        $nutritions = Nutrition::getAllById($id);
        $fishFamilyName = FamilyName::getById($fish->getFamily_name_id());

        $data = array(
            'fishID' => $id,
            'fish' => $fish,
            'familyName' => $fishFamilyName->getFamily_name(),
            'nutritions' => $nutritions 
        );
        
        // die();


        $view = new View(PAGES_PATH . "/nutrition");
        $view->render("manage-fish-nutrition", $data);
    }
    public static function update($fishID, $nutritionID)
    {
        // Your code here
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nutrition = Nutrition::getById($nutritionID);
            
            $nutrition->setNutrition_name(self::clean($_POST['nutrition_name']));

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

        $data = array(
            'fishID' => $fishID,
            'fish' => $fish,
            'familyName' => $fishFamilyName->getFamily_name(),
            'nutritions' => $nutritions,
            'editNutrition' => $editNutrition
        );
        

        $view = new View(PAGES_PATH . "/nutrition");
        $view->render("edit-fish-nutrition", $data);
    }
    public static function save($fishID){
        // Your save code goes here
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = array(
                'fish_id' => $fishID,
                'nutrition_name' => self::clean($_POST['nutrition_name'])
            );

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
