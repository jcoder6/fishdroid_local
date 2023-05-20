<?php

namespace Makkari\Controllers;

require_once("./Controller/Controller.php");
require_once("./Controller/RenderView.php");

use Makkari\Controllers\Controller;
use Makkari\Controllers\View;


class App extends Controller
{

    public static function index()
    {
        $view = new View(PAGES_PATH);
        $view->render("login");
    }
    public static function out()
    {
        session_destroy();
        header("Location: /login");
    }

    public static function activateLink($current, $page)
    {
        if ($current == $page) {
            return "bg-indigo-700 text-white";
        } else {
            return "bg-white";
        }
    }
    public static function activateNav($current, $page)
    {
        if (strtolower($current) == strtolower($page)) {
            return "bg-indigo-700 text-white";
        }
    }
}
