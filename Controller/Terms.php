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
            $termImg = self::clean($_POST['default_img']);
            if(!empty($_FILES['term_img']['name'])){
                $termImg = self::renameImg(self::clean($_FILES['term_img']['name']), 'TERM_IMG');
                $sourcePath = $_FILES['term_img']['tmp_name'];
                $destinationPath = './public/assets/images/term_images/' . $termImg;
                self::uploadImageDirectory($sourcePath, $destinationPath);
            }

            $data = array(
                self::clean($_POST['tech_term']),
                self::clean($_POST['tech_desc']),
                $termImg
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
            $termImg = (!empty($_FILES['term_img']['name'])) ? self::renameImg($_FILES['term_img']['name'], 'TERM_IMG') : self::clean($_POST['default_img']);

            $data = array(
                'tech_term' => self::clean($_POST['tech_term']),
                'tech_desc' => self::clean($_POST['tech_desc']),
                'term_img' => $termImg
            );
            
            $term = Term::getById($id);   
            $currentTermImg = $term->getTerm_img();
            
            $term->setTech_term($data['tech_term']);
            $term->setTech_desc($data['tech_desc']);
            $term->setTerm_img($data['term_img']);

            if($term->save()){
                if(!empty($_FILES['term_img']['name'])){
                    echo 'here';
                    $sourcePath = $_FILES['term_img']['tmp_name'];
                    $destinationPath = './public/assets/images/term_images/' . $termImg;
                    $currentImgPath = './public/assets/images/term_images/' . $currentTermImg;
                    if($currentTermImg != 'NO_IMG_YET') self::deleteCurrentImg($currentTermImg, $currentImgPath);
                    self::uploadImageDirectory($sourcePath, $destinationPath);
                }
                self::messageNotif('success', 'Term updated successfuly');
                header('location: /terms');
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /terms');
            }
        }
    }
    
    public static function confirm($id){
        $view = new View(PAGES_PATH . "/term");

        $terms = Term::getAll();

        $data = array(
            'id' => $id,    
            'terms' => $terms
        ); 

        $view->render("delete-term", $data);
    }
    public static function delete($id){
        $term = Term::getById($id);
        $termImg = $term->getTerm_img();
        $termImgPath = './public/assets/images/term_images/' . $termImg;
        if($termImg != 'NO_IMG_YET') self::deleteCurrentImg($termImg, $termImgPath);
        if($term->remove()){
            self::messageNotif('error', 'Term Deleted');
            header('location: /terms');
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /terms'); 
        }
    }
}
