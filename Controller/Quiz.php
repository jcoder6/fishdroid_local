<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;

class Quiz extends Controller
{
    public static function index()
    {
        // Your code here
        $view = new View(PAGES_PATH . "/quiz");
        $view->render("manage-quizzes");
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
