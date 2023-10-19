<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Hatchery extends Model
{
    protected $id;
    protected $fish_name;
    protected $hatch_video;
    protected $hatch_process;

    public function __construct($id,$fish_name,$hatch_video,$hatch_process)
    {
        parent::__construct();
           $this->id=$id;
    $this->fish_name=$fish_name;
    $this->hatch_video=$hatch_video;
    $this->hatch_process=$hatch_process;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFish_name()
    {
        return $this->fish_name;
    }

    public function getHatch_video()
    {
        return $this->hatch_video;
    }

    public function getHatch_process()
    {
        return $this->hatch_process;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setFish_name($value)
    {
        $this->fish_name = $value;
    }

    public function setHatch_video($value)
    {
        $this->hatch_video = $value;
    }

    public function setHatch_process($value)
    {
        $this->hatch_process = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->allByDates('hatcheries');
        if($r){
            foreach($r as $v){
                $data = new Hatchery(
                    $v->id,
                    $v->fish_name,
                    $v->hatch_video,
                    $v->hatch_process
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('hatcheries','id', $value);
        if($r){
            
            $data = new Hatchery(
                $r->id,
                $r->fish_name,
                $r->hatch_video,
                $r->hatch_process
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE hatcheries SET fish_name=:fish_name,hatch_video=:hatch_video,hatch_process=:hatch_process WHERE id=:id';
            $params = array(':id'=>$this->id,':fish_name'=>$this->fish_name,':hatch_video'=>$this->hatch_video,':hatch_process'=>$this->hatch_process);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO hatcheries VALUES (:id,:fish_name,:hatch_video,:hatch_process)';
            $params = array(':id'=>$this->id,':fish_name'=>$this->fish_name,':hatch_video'=>$this->hatch_video,':hatch_process'=>$this->hatch_process);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('hatcheries',$this->id);
            return $stmt->rowCount();
        }
    }
}

