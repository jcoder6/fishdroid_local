<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\FamilyName;
use Makkari\Models\Fish;
use Makkari\Models\Recipe;

require_once './Model/Recipe.php';

class Recipes extends Controller
{
    public static function viewRecipe($id)
    {
        // Your code 
        $fish = Fish::getById($id);
        $recipes = Recipe::getAllById($id);
        $fishFamilyName = FamilyName::getById($fish->getFamily_name_id());
        $data = array(
            'familyName' => $fishFamilyName->getFamily_name(),
            'fish' => $fish,
            'recipes' => $recipes
        );

        $view = new View(PAGES_PATH . "/recipe");
        $view->render('manage-recipe', $data);
    }

    public static function viewOne($id){
        $recipe = Recipe::getById($id);
        $data = array(
            'recipe' => $recipe
        );

        $view = new View(PAGES_PATH . '/recipe');
        $view->render('view-recipe', $data);
    }
    public static function create($id)
    {
        // Your code here
        $data = array(
            'fishID' => $id
        );

        $view = new View(PAGES_PATH . "/recipe");
        $view->render('add-recipe', $data);
    }
    public static function edit($fishID, $recipeID)
    {
        // Your edit code goes here

        $recipe = Recipe::getById($recipeID);

        $data = array(
            'fishID' => $fishID,
            'recipe' => $recipe
        );

        $view = new View(PAGES_PATH . "/recipe");
        $view->render('edit-recipe', $data);
    }

    public static function update($fishID, $recipeID){
        $recipeImg = (!empty($_FILES['recipe_image']['name'])) ? self::renameImg($_FILES['recipe_image']['name'], 'RECIPE_IMG') : self::clean($_POST['default_img']);

        $recipe = Recipe::getById($recipeID);
        $inputs = array(
            'recipe_name' => self::clean($_POST['recipe_name']),
            'recipe_steps' => self::clean($_POST['recipe_steps']),
            'recipe_img' => $recipeImg
        );
        $currImg = $recipe->getRecipe_img();

        $recipe->setRecipe_name($inputs['recipe_name']);
        $recipe->setRecipe_steps($inputs['recipe_steps']);
        $recipe->setRecipe_img($inputs['recipe_img']);
        

        if($recipe->save()){
            if(!empty($_FILES['recipe_image']['name'])){
                $sourcePath = $_FILES['recipe_image']['tmp_name'];
                $destinationPath = './public/assets/images/recipe_images/' . $recipeImg;
                $imgPath = './public/assets/images/recipe_images/' . $currImg;
                self::uploadImageDirectory($sourcePath, $destinationPath);
                self::deleteCurrentImg($currImg, $imgPath);
            }
            self::messageNotif('success', ' Recipe Updated');
            header('location: /recipes/viewRecipe/' . $fishID);
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /recipes/viewRecipe/' . $fishID);
        }
    }

    public static function save($fishID){
        // Your save code goes here
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $recipeImg = (!empty($_FILES['recipe_image']['name'])) ? self::renameImg($_FILES['recipe_image']['name'], 'RECIPE_IMG') : self::clean($_POST['default_img']);

            if(!empty($_FILES['recipe_image']['name'])){
                $sourcePath = $_FILES['recipe_image']['tmp_name'];
                $destinationPath = './public/assets/images/recipe_images/' . $recipeImg;
                self::uploadImageDirectory($sourcePath, $destinationPath);
            }
            $inputs = array(
                'fish_id' => $fishID,
                'recipe_name' => self::clean($_POST['recipe_name']),
                'recipe_steps' => self::clean($_POST['recipe_steps']),
                'recipe_img' => $recipeImg
            );

            $recipe = new Recipe(null, ...$inputs);

            if($recipe->save()){
                self::messageNotif('success', 'New Recipe Added');
                header('location: /recipes/viewRecipe/' . $fishID);
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /recipes/viewRecipe/' . $fishID);
            }
        }
    }
    
    public static function confirm($fishID, $recipeID){
        // Your code goes here
        $fish = Fish::getById($fishID);
        $recipes = Recipe::getAllById($fishID);
        $fishFamilyName = FamilyName::getById($fish->getFamily_name_id());
        $data = array(
            'familyName' => $fishFamilyName->getFamily_name(),
            'fish' => $fish,
            'recipeID' => $recipeID,
            'recipes' => $recipes
        );

        $view = new View(PAGES_PATH . "/recipe");
        $view->render('delete-recipe', $data);
    }
    public static function delete($fishID, $recipeID){
        //your delete code goes here
        $recipe = Recipe::getById($recipeID);
        if($recipe->remove()){
            self::deleteCurrentImg($recipe->getRecipe_img(), './public/assets/images/recipe_images/' . $recipe->getRecipe_img());
            self::messageNotif('error', 'Recipe Deleted');
            header('location: /recipes/viewRecipe/' . $fishID);
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /recipes'); 
        }
    }
}
