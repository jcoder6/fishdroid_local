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
            }

            $data = array(
                self::clean($_POST['quiz_answer']),
                self::clean($_POST['quiz_hint']),
                $imgNewName
            );

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
            
            $imgNewName = (!empty($_FILES['quiz_image']['name'])) ? self::renameImg($_FILES['quiz_image']['name'], 'QUIZ_IMG') : self::clean($_POST['default_img']);

            $data = array(
                'quiz_answer' => self::clean($_POST['quiz_answer']),
                'quiz_hint' => self::clean($_POST['quiz_hint']),
                'quiz_image' => $imgNewName
            );

            $quiz = Quiz::getById($id);
            $currentImg = $quiz->getQuiz_image();

            $quiz->setQuiz_answer($data['quiz_answer']);
            $quiz->setquiz_hint($data['quiz_hint']);
            $quiz->setQuiz_image($data['quiz_image']);

            // var_dump($data);
            // die();
            if($quiz->save()){
                if(!empty($_FILES['quiz_image']['name'])){
                    $sourcePath = $_FILES['quiz_image']['tmp_name'];  
                    $destinationPath = './public/assets/images/quiz_images/' . $imgNewName; 
                    $imgPath = './public/assets/images/quiz_images/' . $currentImg;
                    self::deleteCurrentImg($currentImg, $imgPath);
                    self::uploadImageDirectory($sourcePath, $destinationPath);
                }
                self::messageNotif('success', 'Quiz Updated');
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
            self::deleteCurrentImg($quiz->getQuiz_image(), './public/assets/images/quiz_images/' . $quiz->getQuiz_image());
            self::messageNotif('error', 'Quiz Deleted');
            header('location: /quizzes');
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /quizzes'); 
        }
    }
}
