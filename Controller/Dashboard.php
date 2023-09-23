<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\DashboardModel;

require_once './Model/Boardash.php';

class Dashboard extends Controller
{
    public static function index()
    {
        $count = new DashboardModel;
        $fishCount = $count->getFishCount();
        $userCount = $count->getUserCount();
        $triviaCount = $count->getTriviaCount();
        $termCount = $count->getTermCount();


        $data = array(
                'countData' => [
                    'fishCount' => $fishCount,
                    'userCount' => $userCount,
                    'triviaCount' => $triviaCount,
                    'termCount' => $termCount
                ]
            );

        $view = new View(PAGES_PATH . "/home");
        $view->render("dashboard", $data);
    }
}
