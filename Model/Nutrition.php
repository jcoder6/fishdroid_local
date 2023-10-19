<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Nutrition extends Model
{
    protected $id;
    protected $fish_id;
    protected $nutrition_name;

    public function __construct($id,$fish_id,$nutrition_name)
    {
        parent::__construct();
           $this->id=$id;
    $this->fish_id=$fish_id;
    $this->nutrition_name=$nutrition_name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFish_id()
    {
        return $this->fish_id;
    }

    public function getNutrition_name()
    {
        return $this->nutrition_name;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setFish_id($value)
    {
        $this->fish_id = $value;
    }

    public function setNutrition_name($value)
    {
        $this->nutrition_name = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->allByDates('nutritions');
        if($r){
            foreach($r as $v){
                $data = new Nutrition(
                    $v->id,
                    $v->fish_id,
                    $v->nutrition_name
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('nutritions','id', $value);
        if($r){
            
            $data = new Nutrition(
                $r->id,
                $r->fish_id,
                $r->nutrition_name
            );
            
        }
        return $data;
    }

    public static function getAllById($value){
        $m = new Model;
        $list = [];
        $r = $m->allById('nutritions','fish_id', $value);
        if($r){
            foreach($r as $v){
                $data = new Nutrition(
                    $v->id,
                    $v->fish_id,
                    $v->nutrition_name
                );
                $list[] = $data;
            }
        }

        return $list;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE nutritions SET fish_id=:fish_id,nutrition_name=:nutrition_name WHERE id=:id';
            $params = array(':id'=>$this->id,':fish_id'=>$this->fish_id,':nutrition_name'=>$this->nutrition_name);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO nutritions VALUES (:id,:fish_id,:nutrition_name)';
            $params = array(':id'=>$this->id,':fish_id'=>$this->fish_id,':nutrition_name'=>$this->nutrition_name);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('nutritions',$this->id);
            return $stmt->rowCount();
        }
    }
}

