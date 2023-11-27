<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\Hatchery;

require_once './Model/Hatchery.php';

class Hatcheries extends Controller
{
    public static function index()
    {
        $view = new View(PAGES_PATH . '/hatchery');

        $hatchery = Hatchery::getAll();

        $data = array(
            'hatcheries' => $hatchery
        );

        // var_dump($data['hatcheries']);
        $view->render('manage-hatchery', $data);
    }
    public static function create()
    {
        // Your code here
        $view = new View(PAGES_PATH . '/hatchery');
        $view->render('add-hatchery');
    }
    public static function edit($id)
    {
        // Your edit code goes here
        $view = new View(PAGES_PATH . '/hatchery');
        $hatchery = Hatchery::getById($id);

        $data = array(
            'hatchery' => $hatchery
        );

        $view->render('edit-hatchery', $data);
    }
    public static function update($id) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // $hatchVideo = (!empty($_FILES['hatch_video']['name'])) ? self::renameImg($_FILES['hatch_video']['name'], 'HATCH_VIDEO') : self::clean($_POST['default_video']);

            $hatchery = Hatchery::getById($id);
            // $currentHatchVideo = $hatchery->getHatch_video();

            $hatchery->setFish_name(self::clean($_POST['fish_name']));
            // $hatchery->setHatch_video($hatchVideo);
            $hatchery->setHatch_process(self::clean($_POST['hatch_process']));

            if($hatchery->save()){
                // if(!empty($_FILES['hatch_video']['name'])){
                //     $sourcePath = $_FILES['hatch_video']['tmp_name'];
                //     $destinationPath = './public/assets/videos/hatch_videos/' . $hatchVideo;
                //     $currentVideoPath = './public/assets/videos/hatch_videos/' . $currentHatchVideo;
                //     if($currentHatchVideo != 'NO_VIDEO_YET'){
                //         self::deleteCurrentImg($currentHatchVideo, $currentVideoPath);
                //     }
                //     self::uploadImageDirectory($sourcePath, $destinationPath);
                // }
                self::messageNotif('success', 'Hatchery updated');
                header('location: /hatcheries');
            } else {
                self::messageNotif('error', 'Something went wrong');
                header('location: /hatcheries');
            }
            
        }
    }
    public static function save(){
        // Your save code goes here
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // echo 'save';
            // $newVideoName = self::clean($_POST['default_video']);
            // if(!empty($_FILES['hatch_video']['name'])){
            //     $newVideoName = self::renameImg($_FILES['hatch_video']['name'], 'HATCH_VIDEO');
            //     $sourcePath = $_FILES['hatch_video']['tmp_name'];
            //     $destinationPath = './public/assets/videos/hatch_videos/' . $newVideoName;
            //     self::uploadImageDirectory($sourcePath, $destinationPath);
            // }
            
            $data = array(
                self::clean($_POST['fish_name']),
                self::clean($_POST['hatch_process'])
            );

            $hatchery = new Hatchery(null, ...$data);

            if($hatchery->save()){
                self::messageNotif('success', 'New Hatchery Added');
                header('location: /hatcheries'); 
            } else {
                self::messageNotif('error', 'Something went wrong, please try again');
                header('location: /hatcheries');
            }
            // var_dump($data);
        }
    }
    
    public static function confirm($id){
        // Your code goes here
        $view = new View(PAGES_PATH . '/hatchery'); 
        $hatchery = Hatchery::getAll();

        $data = array(
            'id' => $id,
            'hatcheries' => $hatchery
        );

        $view->render('delete-hatchery', $data);
    }
    public static function delete($id){
        //your delete code goes here
        $hatchery = Hatchery::getById($id);
        // $videoPath = './public/assets/videos/hatch_videos/' . $hatchery->getHatch_video();
        // if($hatchery->getHatch_video() != 'NO_VIDEO_YET'){
        //     self::deleteCurrentImg($hatchery->getHatch_video(), $videoPath);
        // }
        if($hatchery->remove()){
            self::messageNotif('error', 'Hatchery Deleted');
            header('location: /hatcheries');
        } else {
            self::messageNotif('error', 'Something went wrong, please try again');
            header('location: /hatcheries'); 
        }
    }
}
