<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\Hatchery;
use Makkari\Models\HatchVideo;

require_once './Model/HatchVideo.php';

class HatchVideos extends Controller
{
    public static function viewVideos($id)
    {
        // Your code here
        $hatchFish = Hatchery::getById($id);
        $hatchVideos = HatchVideo::getAllById($id);

        $data = array(
            'fishID' => $id,
            'hatchFish' => $hatchFish,
            'hatchVideos' => $hatchVideos
        );

        $view = new View(PAGES_PATH . "/hatch_videos");
        $view->render("hatch-videos", $data);
    }

    public static function update($fishID, $videoID)
    {
        // Your code here
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $hatchVideo = HatchVideo::getById($videoID);
            
            $hatchVideo->setPhase_num(self::clean($_POST['phase_num']));
            $hatchVideo->setVideo_link(self::clean($_POST['video_link']));

            if($hatchVideo->save()){
                self::messageNotif('success', 'Hatch Video Updated');
                header('location: /hatchVideos/viewVideos/' . $fishID);
            } else {
                self::messageNotif('error', 'Somthing went wrong');
                header('location: /hatchVideos/viewVideos/' . $fishID);
            }
        }
    }

    public static function edit($id, $videoID)
    {
        // Your edit code goes here
        $hatchFish = Hatchery::getById($id);
        $hatchVideos = HatchVideo::getAllById($id);
        $editVideo = HatchVideo::getById($videoID);


        $data = array(
            'fishID' => $id,
            'editVideo' => $editVideo,
            'hatchFish' => $hatchFish,
            'hatchVideos' => $hatchVideos
        );

        $view = new View(PAGES_PATH . "/hatch_videos");
        $view->render("edit-hatch-video", $data);
        
    }
    public static function save($id){
        // Your save code goes here
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $data = array(
                'fish_id' => $id,
                'phase_num' => self::clean($_POST['phase_num']),
                'video_link' => self::clean($_POST['video_link'])
            );

            $hatchVideo = new HatchVideo(null, ...$data);

            if($hatchVideo->save()){
                self::messageNotif('success', 'New Hatch Video Added');
                header('location: /hatchVideos/viewVideos/' . $id);
            } else {
                self::messageNotif('error', 'Something went wrong');
                header('location: /hatchVideos/viewVideos/' . $id);
            }
        }   
    }
    
    public static function confirm($id, $videoID){
        // Your code goes here
        $hatchFish = Hatchery::getById($id);
        $hatchVideos = HatchVideo::getAllById($id);

        $data = array(
            'videoID' => $videoID,
            'fishID' => $id,
            'hatchFish' => $hatchFish,
            'hatchVideos' => $hatchVideos
        );

        $view = new View(PAGES_PATH . "/hatch_videos");
        $view->render("delete-hatch-video", $data);
    }
    public static function delete($fishID, $videoID){
        //your delete code goes here
        $hatchVideo = HatchVideo::getById($videoID);

        if($hatchVideo->remove()){
            self::messageNotif('error', 'Video phase deleted');
            header('location: /hatchVideos/viewVideos/' . $fishID);
        } else {
            self::messageNotif('error', 'Something went wrong');
            header('location: /hatchVideos/viewVideos/' . $fishID);
        }

    }
}
