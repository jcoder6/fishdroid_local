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

    public static function edit($id) {
        $view = new View(PAGES_PATH . '/term');

        $term = Term::getById($id);
        
        $data = array(
            'term' => $term
        );
        $view->render('edit-term', $data);
    }

    public static function save() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = array(
                self::clean($_POST['tech_term']),
                self::clean($_POST['tech_desc'])
            );

            $term = new Term(null, ...$data);

            if($term->save()){
                self::messageNotif('success', 'Term added successfuly');
                header('location: /terms');
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /terms');
            }
        }
        
    }

    public static function update($id) {
       

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = array(
                'tech_term' => self::clean($_POST['tech_term']),
                'tech_desc' => self::clean($_POST['tech_desc'])
            );
            
            $term = Term::getById($id);   

            $term->setTech_term($data['tech_term']);
            $term->setTech_desc($data['tech_desc']);

            if($term->save()){
                self::messageNotif('success', 'Term updated successfuly');
                header('location: /terms');
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /terms');
            }
        }
    }
    
    public static function confirm(){
        // Your code goes here
    }
    public static function delete(){
        //your delete code goes here
    }
}
