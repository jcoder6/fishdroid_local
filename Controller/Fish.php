<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;

class Fish extends Controller
{
    public static function index()
    {
        $view = new View(PAGES_PATH . "/fish");
        $view->render("manage-fish");
    }
    public static function create()
    {
        $view = new View(PAGES_PATH . "/fish");
        $view->render("add-fish");
    }
    public static function edit()
    {
        // Your edit code goes here
    }
    public static function save(){
        // Your save code goes here
    }
    
    public static function confirm(){
        // Your code goes here
    }
    public static function delete(){
        //your delete code goes here
    }
}
