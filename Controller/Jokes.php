<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\Joke;

require_once './Model/Joke.php';

class Jokes extends Controller
{
    public static function index()
    {
        // Your code here
        $view = new View(PAGES_PATH . "/joke");

        $jokes = Joke::getAll();
        $data = array(
            'jokes' => $jokes
        );

        $view->render("manage-jokes", $data);
    }
    public static function create()
    {
        $view = new View(PAGES_PATH . "/joke");
        $view->render("add-jokes");
   }
    public static function edit($id)
    {
        $view = new View(PAGES_PATH . '/joke');
        $joke = Joke::getById($id);

        $data = array(
            'joke' => $joke
        );
        $view->render('edit-joke', $data); 
    }
    public static function save(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $imgNewName = self::clean($_POST['default_img']);
            if(!empty($_FILES['joke_image']['name'])){
                $imgNewName = self::renameImg($_FILES['joke_image']['name'], 'JOKE_IMG');
                $sourcePath = $_FILES['joke_image']['tmp_name'];  
                $destinationPath = './public/assets/images/joke_images/' . $imgNewName; 
                self::uploadImageDirectory($sourcePath, $destinationPath);
            } else {
                self::messageNotif('error', 'Joke image is required');
                header('location: /jokes/create');
                die();
            }

            $data = array(
                self::clean($_POST['question']),
                self::clean($_POST['answer']),
                $imgNewName
            );

            $joke = new Joke(NULL, ...$data);

            if($joke->save()){
                self::messageNotif('success', 'New Joke Added');
                header('location: /jokes');
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /jokes');
            }
        }
    }

    public static function update($id) {   
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $imgNewName = (!empty($_FILES['joke_image']['name'])) ? self::renameImg($_FILES['joke_image']['name'], 'USER_IMG') : self::clean($_POST['default_img']);

            $data = array(
                'question' => self::clean($_POST['question']),
                'answer' => self::clean($_POST['answer']),
                'joke_image' => $imgNewName
            );

            $joke = Joke::getById($id);
            $currentImg = $joke->getJoke_image();

            $joke->setQuestion($data['question']);
            $joke->setAnswer($data['answer']);
            $joke->setJoke_image($data['joke_image']);

            if($joke->save()){
                if(!empty($_FILES['joke_image']['name'])){
                    $sourcePath = $_FILES['joke_image']['tmp_name'];  
                    $destinationPath = './public/assets/images/joke_images/' . $imgNewName; 
                    $imgPath = './public/assets/images/joke_images/' . $currentImg;
                    self::deleteCurrentImg($currentImg, $imgPath);
                    self::uploadImageDirectory($sourcePath, $destinationPath);
                }
                self::messageNotif('success', 'Joke updated');
                header('location: /jokes');
            } else {
                echo 'failed';
            }
        }    
    }
    
    public static function confirm($id){
        $view = new View(PAGES_PATH . "/joke");

        $jokes = Joke::getAll();

        $data = array(
            'id' => $id,    
            'jokes' => $jokes
        ); 

        $view->render("delete-joke", $data);
    }

    public static function delete($id){
        $joke = Joke::getById($id);
        if($joke->remove()){
            self::messageNotif('error', 'joke Deleted');
            header('location: /jokes');
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /jokes'); 
        }
    }
}
