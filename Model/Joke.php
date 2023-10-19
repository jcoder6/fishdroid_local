<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Joke extends Model
{
    protected $id;
    protected $trivia;
    protected $trivia_video;

    public function __construct($id,$trivia,$trivia_video)
    {
        parent::__construct();
           $this->id=$id;
    $this->trivia=$trivia;
    $this->trivia_video=$trivia_video;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTrivia()
    {
        return $this->trivia;
    }

    public function getTrivia_video()
    {
        return $this->trivia_video;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setTrivia($value)
    {
        $this->trivia = $value;
    }

    public function setTrivia_video($value)
    {
        $this->trivia_video = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->allByDates('jokes');
        if($r){
            foreach($r as $v){
                $data = new Joke(
                    $v->id,
                    $v->trivia,
                    $v->trivia_video

                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('jokes','id', $value);
        if($r){
            
            $data = new Joke(
                $r->id,
                $r->trivia,
                $r->trivia_video
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE jokes SET trivia=:trivia,trivia_video=:trivia_video WHERE id=:id';
            $params = array(':id'=>$this->id,':trivia'=>$this->trivia,':trivia_video'=>$this->trivia_video);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO jokes VALUES (:id,:trivia,:trivia_video)';
            $params = array(':id'=>$this->id,':trivia'=>$this->trivia,':trivia_video'=>$this->trivia_video);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('jokes',$this->id);
            return $stmt->rowCount();
        }
    }
}

