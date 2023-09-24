<?php
namespace Makkari\Controllers;

use Makkari\Controllers\Controller;

class Nutritions extends Controller
{
    public static function viewNutrition($id)
    {
        $view = new View(PAGES_PATH . "/nutrition");
        $view->render("manage-fish-nutrition");
    }
    public static function create()
    {
        // Your code here
    }
    public static function edit($id)
    {
        // Your edit code goes here
        $view = new View(PAGES_PATH . "/nutrition");
        $view->render("edit-fish-nutrition");
    }
    public static function save(){
        // Your save code goes here
    }
    
    public static function confirm(){
        // Your code goes here
    }
    public static function delete($id){
        $view = new View(PAGES_PATH . "/nutrition");
        $view->render("delete-fish-nutrition");
        //your delete code goes here
    }
}
