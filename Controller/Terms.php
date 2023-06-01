<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\Term;

require_once './Model/Term.php';

class Terms extends Controller
{
    public static function index()
    {
        // Your code here
        $view = new View(PAGES_PATH . "/term");

        $terms = Term::getAll();

        $data = array(
            'terms' => $terms
        ); 

        $view->render("manage-terms", $data);
    }
    public static function create()
    {
        $view = new View(PAGES_PATH . "/term");
        $view->render("add-terms");
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
