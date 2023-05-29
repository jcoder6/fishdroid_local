<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\User;

require_once "./Model/User.php";

class Users extends Controller
{
    public static function index()
    {
        // Your code here
        $view = new View(PAGES_PATH . "/user");

        $users = User::getAll();

        $data = array(
            'users' => $users
        );

        $view->render("manage-user", $data);
    }

    public static function create()
    {
        // Your code here
        $view = new View(PAGES_PATH . '/user');
        $view->render('add-user');
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
