<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\DashboardModel;
use Makkari\Models\FamilyName;
use Makkari\Models\Fish;
use Makkari\Models\Nutrition;
use Makkari\Models\Recipe;

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
        $fish = Fish::getLast();
        $familyName = FamilyName::getById($fish->getFamily_name_id());
        $recipes = Recipe::getAllById($fish->getId());
        $nutritions = Nutrition::getAllById($fish->getId());


        $data = array(
                'countData' => [
                    'fishCount' => $fishCount,
                    'userCount' => $userCount,
                    'triviaCount' => $triviaCount,
                    'termCount' => $termCount
                ],
                'fish' => $fish,
                'familyName' => ucfirst(strtolower($familyName->getFamily_name())),
                'recipes' => $recipes,
                'nutritions' => $nutritions
            );

        $view = new View(PAGES_PATH . "/home");
        $view->render("dashboard", $data);
    }
}
