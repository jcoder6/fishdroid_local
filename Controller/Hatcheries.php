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
        $view = new View(PAGES_PATH . '/hatchery');
        $view->render('add-hatchery');
    }
    public static function edit($id)
    {
        // Your edit code goes here
        $view = new View(PAGES_PATH . '/hatchery');
        $view->render('edit-hatchery');
    }
    public static function save(){
        // Your save code goes here
    }
    
    public static function confirm($id){
        // Your code goes here
        $view = new View(PAGES_PATH . '/hatchery');
        $view->render('delete-hatchery');
    }
    public static function delete(){
        //your delete code goes here
    }
}
