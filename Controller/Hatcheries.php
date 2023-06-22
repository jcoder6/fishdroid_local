<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;

class Hatcheries extends Controller
{
    public static function index()
    {
        $view = new View(PAGES_PATH . '/hatchery');
        $view->render('manage-hatchery');
    }
    public static function create()
    {
        // Your code here
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
