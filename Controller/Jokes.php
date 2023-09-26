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

        $trivias = Joke::getAll();
        $data = array(
            'trivias' => $trivias
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
        $trivia = Joke::getById($id);

        $data = array(
            'trivia' => $trivia
        );
        $view->render('edit-joke', $data); 
    }
    public static function save(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $imgNewName = self::clean($_POST['default_video']);
            $sourcePath = '';
            $destinationPath = '';

            if(!empty($_FILES['trivia_video']['name'])){
                $imgNewName = self::renameImg($_FILES['trivia_video']['name'], 'TRIVIA_VIDEO');
                $sourcePath = $_FILES['trivia_video']['tmp_name'];  
                $destinationPath = './public/assets/videos/trivia_videos/' . $imgNewName; 
            }

            $data = array(
                self::clean($_POST['trivia']),
                $imgNewName
            );

            $joke = new Joke(NULL, ...$data);

            if($joke->save()){
                self::uploadImageDirectory($sourcePath, $destinationPath);
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
            
            $videoName = (!empty($_FILES['trivia_video']['name'])) ? self::renameImg($_FILES['trivia_video']['name'], 'TRIVIA_VIDEO') : self::clean($_POST['default_video']);

            $data = array(
                'trivia' => self::clean($_POST['trivia']),
                'trivia_video' => $videoName
            );

            $trivia = Joke::getById($id);
            $currentImg = $trivia->getTrivia_video();

            $trivia->setTrivia($data['trivia']);
            $trivia->setTrivia_video($data['trivia_video']);

            if($trivia->save()){
                if(!empty($_FILES['trivia_video']['name'])){
                    $sourcePath = $_FILES['trivia_video']['tmp_name'];  
                    $destinationPath = './public/assets/videos/trivia_videos/' . $videoName; 
                    $imgPath = './public/assets/videos/trivia_videos/' . $currentImg;
                    if($currentImg != 'NO_VIDEO_YET'){
                        self::deleteCurrentImg($currentImg, $imgPath);
                    }
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

        $trivias = Joke::getAll();

        $data = array(
            'id' => $id,        
            'trivias' => $trivias
        ); 

        $view->render("delete-joke", $data);
    }

    public static function delete($id){
        $joke = Joke::getById($id);
        $deleteTriviaVideo = $joke->getTrivia_video();
        $videoPath = './public/assets/videos/trivia_videos/' . $deleteTriviaVideo;
        if($joke->remove()){
            self::deleteCurrentImg($deleteTriviaVideo, $videoPath);
            self::messageNotif('error', 'joke Deleted');
            header('location: /jokes');
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /jokes'); 
        }
    }
}
