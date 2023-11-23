<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Nutrition extends Model
{
    protected $id;
    protected $fish_id;
    protected $nutrition_id;

    public function __construct($id,$fish_id,$nutrition_id)
    {
        parent::__construct();
           $this->id=$id;
    $this->fish_id=$fish_id;
    $this->nutrition_id=$nutrition_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFish_id()
    {
        return $this->fish_id;
    }

    public function getnutrition_id()
    {
        return $this->nutrition_id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setFish_id($value)
    {
        $this->fish_id = $value;
    }

    public function setnutrition_id($value)
    {
        $this->nutrition_id = $value;
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
                    $v->nutrition_id
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
                $r->nutrition_id
            );
            
        }
        return $data;
    }

    public static function getAllById($value){
        $m = new Model;
        $list = [];
        $r = $m->nutritionByFishId('nutritions', $value);
        if($r){
            foreach($r as $v){
                $data = array(
                    'id' => $v->id,
                    'fish' => $v->fish_id,
                    'nutriID' => $v->nutriID,
                    'nutrition_name' => $v->nutrition_name,
                    'nutrition_id' => $v->nutrition_id
                );
                $list[] = $data;
            }
        }

        return $list;
    }

    public static function isExist($fishID, $nutriID){
        $m = new Model;
        $isExist = $m->checkIfExist($fishID, $nutriID);

        return $isExist;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE nutritions SET fish_id=:fish_id,nutrition_id=:nutrition_id WHERE id=:id';
            $params = array(':id'=>$this->id,':fish_id'=>$this->fish_id,':nutrition_id'=>$this->nutrition_id);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO nutritions VALUES (:id,:fish_id,:nutrition_id)';
            $params = array(':id'=>$this->id,':fish_id'=>$this->fish_id,':nutrition_id'=>$this->nutrition_id);
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

