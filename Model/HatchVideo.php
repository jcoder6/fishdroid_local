<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class HatchVideo extends Model
{
    protected $id;
    protected $fish_id;
    protected $phase_num;
    protected $video_link;

    public function __construct($id,$fish_id,$phase_num,$video_link)
    {
        parent::__construct();
           $this->id=$id;
    $this->fish_id=$fish_id;
    $this->phase_num=$phase_num;
    $this->video_link=$video_link;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFish_id()
    {
        return $this->fish_id;
    }

    public function getPhase_num()
    {
        return $this->phase_num;
    }

    public function getVideo_link()
    {
        return $this->video_link;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setFish_id($value)
    {
        $this->fish_id = $value;
    }

    public function setPhase_num($value)
    {
        $this->phase_num = $value;
    }

    public function setVideo_link($value)
    {
        $this->video_link = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->all('hatchvideos');
        if($r){
            foreach($r as $v){
                $data = new HatchVideo(
                    $v->id,
                    $v->fish_id,
                    $v->phase_num,
                    $v->video_link
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getAllById($value){
        $m = new Model;
        $list = [];
        $r = $m->allByIdSorted('hatchvideos', 'fish_id', $value, 'phase_num');
        if($r){
            foreach($r as $v){
                $data = new HatchVideo(
                    $v->id,
                    $v->fish_id,
                    $v->phase_num,
                    $v->video_link
                );
                $list[] = $data;
            }
        }

        return $list;
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('hatchvideos','id', $value);
        if($r){
            
            $data = new HatchVideo(
                $r->id,
                $r->fish_id,
                $r->phase_num,
                $r->video_link
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE hatchvideos SET fish_id=:fish_id,phase_num=:phase_num,video_link=:video_link WHERE id=:id';
            $params = array(':id'=>$this->id,':fish_id'=>$this->fish_id,':phase_num'=>$this->phase_num,':video_link'=>$this->video_link);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO hatchvideos VALUES (:id,:fish_id,:phase_num,:video_link)';
            $params = array(':id'=>$this->id,':fish_id'=>$this->fish_id,':phase_num'=>$this->phase_num,':video_link'=>$this->video_link);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('hatchvideos',$this->id);
            return $stmt->rowCount();
        }
    }
}

