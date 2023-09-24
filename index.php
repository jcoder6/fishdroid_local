<?php
session_start();

use Makkari\Controllers\Route as Route;

require_once("./Controller/Route.php");

$page = Route::getURI();

$showNotif = $_SESSION['notif'] ?? "";

unset($_SESSION['notif']);


$pageName = ucfirst($page[1] == "" ? "Dashboard" : $page[1]);
$m = ucfirst($page[2] ?? "");


require_once("./Controller/App.php"); // Default
require_once("./Controller/Roles.php"); // Defaul
require_once("./Controller/Dashboard.php");
require_once("./Controller/Fishes.php");
require_once("./Controller/Users.php");
require_once("./Controller/jokes.php");
require_once("./Controller/quizzes.php");
require_once("./Controller/FamilyNames.php");
require_once("./Controller/Nutritions.php");
require_once("./Controller/Recipes.php");
require_once("./Controller/terms.php");
require_once("./Controller/hatcheries.php");
require_once("./Controller/fishrecognitions.php");


Route::contentToRender();
