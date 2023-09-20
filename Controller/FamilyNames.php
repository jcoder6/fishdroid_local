<?php

namespace Makkari\Controllers;
use Makkari\Controllers\Controller;
use Makkari\Models\FamilyName;

require_once './Model/FamilyName.php';

class FamilyNames extends Controller
{
    public static function index()
    {
        // Your code here
        $view = new View(PAGES_PATH . "/family_name");
        
        $familyNames = FamilyName::getAll();

        $data = array(
            'familyNames' => $familyNames
        );

        $view->render("manage-famName", $data);
    }
    public static function create()
    {
        // Your code here
    }
    public static function edit($id){
        $view = new View(PAGES_PATH . '/family_name');

        $familyNames = FamilyName::getAll();
        $editFamilyName = FamilyName::getById($id);

        $data = array(
            'editFamilyName' => $editFamilyName,
            'familyNames' => $familyNames
        );
        $view->render('edit-famName', $data);
        // Your edit code goes here
    }

    public static function update($id) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $familyname = FamilyName::getById($id);

            $familyname->setFamily_name(self::clean($_POST['family_name']));

            if($familyname->save()){
                self::messageNotif('success', 'Family Name updated successfuly');
                header('location: /familyNames');
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /familyNames');
            }
        }
    }
    public static function save(){
        // Your save code goes here
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $date = date('Y-m-d H:i:s');
            $data = array(
                self::clean($_POST['family_name']),
                $date
            );

            $familyname = new FamilyName(null, ...$data);

            if($familyname->save()){
                self::messageNotif('success', 'Familyn Name added successfuly');
                header('location: /familynames');
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /familynames');
            }
        }
    }
    
    public static function confirm($id){
        // Your code goes here
        $view = new View(PAGES_PATH . "/family_name");
        
        $familyNames = FamilyName::getAll();

        $data = array(
            'id' => $id,
            'familyNames' => $familyNames
        );

        $view->render("delete-famName", $data);
    }
    public static function delete($id){
        //your delete code goes here
        $familyName = FamilyName::getById($id);
        if($familyName->remove()){
            self::messageNotif('error', 'Family Name Deleted');
            header('location: /familyNames');
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /familyNames'); 
        }
    }
}
