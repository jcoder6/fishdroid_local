<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\Quiz;

require_once './Model/Quiz.php';


class Quizzes extends Controller
{
    public static function index()
    {
        // Your code here
        $view = new View(PAGES_PATH . "/quiz");

        $quizzes = Quiz::getAll();
        $data = array(
            'quizzes' => $quizzes
        );

        $view->render("manage-quizzes", $data);
    }
    public static function create()
    {
        // Your code here
        $view = new View(PAGES_PATH . "/quiz");
        $view->render('add-quiz');
    }
    public static function edit($id)
    {
        $view = new View(PAGES_PATH . "/quiz");
        $quiz = Quiz::getById($id);

        $data = array(
            'quiz' => $quiz
        );
        $view->render('edit-quiz', $data);
    }
    public static function save(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $imgNewName = self::clean($_POST['default_img']);
            if(!empty($_FILES['quiz_image']['name'])){
                $imgNewName = self::renameImg($_FILES['quiz_image']['name'], 'QUIZ_IMG');
                $sourcePath = $_FILES['quiz_image']['tmp_name'];  
                $destinationPath = './public/assets/images/quiz_images/' . $imgNewName; 
                self::uploadImageDirectory($sourcePath, $destinationPath);
            } else {
                self::messageNotif('error', 'quiz image is required');
                header('location: /quizzes/create');
                die();
            }

            $data = array(
                self::clean($_POST['fish_name']),
                self::clean($_POST['scientific_name']),
                self::clean($_POST['answer']),
                self::clean($_POST['option1']),
                self::clean($_POST['option2']),
                self::clean($_POST['option3']),
                $imgNewName
            );

            // var_dump($data);    
            
            $quiz = new Quiz(NULL, ...$data);

            if($quiz->save()){
                self::messageNotif('success', 'New quiz Added');
                header('location: /quizzes');   
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /quizzes');
            }
        }
    }

    public static function update($id) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $imgNewName = (!empty($_FILES['quiz_image']['name'])) ? self::renameImg($_FILES['quiz_image']['name'], 'USER_IMG') : self::clean($_POST['default_img']);

            $data = array(
                'fish_name' => self::clean($_POST['fish_name']),
                'scientific_name' => self::clean($_POST['scientific_name']),
                'answer' => self::clean($_POST['answer']),
                'option1' => self::clean($_POST['option1']),
                'option2' => self::clean($_POST['option2']),
                'option3' => self::clean($_POST['option3']),
                'quiz_image' => $imgNewName
            );

            $quiz = Quiz::getById($id);
            $currentImg = $quiz->getQuiz_image();

            $quiz->setFish_name($data['fish_name']);
            $quiz->setScientific_name($data['scientific_name']);
            $quiz->setAnswer($data['answer']);
            $quiz->setOption1($data['option1']);
            $quiz->setOption2($data['option2']);
            $quiz->setOption3($data['option3']);
            $quiz->setQuiz_image($data['quiz_image']);

            var_dump($data);

            if($quiz->save()){
                if(!empty($_FILES['quiz_image']['name'])){
                    $sourcePath = $_FILES['quiz_image']['tmp_name'];  
                    $destinationPath = './public/assets/images/quiz_images/' . $imgNewName; 
                    $imgPath = './public/assets/images/quiz_images/' . $currentImg;
                    self::deleteCurrentImg($currentImg, $imgPath);
                    self::uploadImageDirectory($sourcePath, $destinationPath);
                }
                self::messageNotif('success', 'quiz updated');
                header('location: /quizzes');
            } else {
                echo 'failed';
            }
        }  
    }
    
    public static function confirm($id){
        $view = new View(PAGES_PATH . "/quiz");

        $quizzes = Quiz::getAll();

        $data = array(
            'id' => $id,    
            'quizzes' => $quizzes
        ); 

        $view->render('delete-quiz', $data);
    }
    public static function delete($id){
        $quiz = Quiz::getById($id);
        if($quiz->remove()){
            self::messageNotif('error', 'Quiz Deleted');
            header('location: /quizzes');
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /quizzes'); 
        }
    }
}
