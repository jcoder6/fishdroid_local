<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;

class Recipes extends Controller
{
    public static function viewRecipe($id)
    {
        // Your code 
        $view = new View(PAGES_PATH . "/recipe");
        $view->render('manage-recipe');
    }
    public static function create($id)
    {
        // Your code here
        $view = new View(PAGES_PATH . "/recipe");
        $view->render('add-recipe');
    }
    public static function edit($id)
    {
        // Your edit code goes here
        $view = new View(PAGES_PATH . "/recipe");
        $view->render('edit-recipe');
    }
    public static function save(){
        // Your save code goes here
    }
    
    public static function confirm($id){
        // Your code goes here
        $view = new View(PAGES_PATH . "/recipe");
        $view->render('delete-recipe');
    }
    public static function delete(){
        //your delete code goes here
    }
}
