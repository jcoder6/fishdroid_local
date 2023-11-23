<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Fishnutrition extends Model
{
    protected $id;
    protected $nutrition_name;

    public function __construct($id,$nutrition_name)
    {
        parent::__construct();
           $this->id=$id;
    $this->nutrition_name=$nutrition_name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNutrition_name()
    {
        return $this->nutrition_name;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setNutrition_name($value)
    {
        $this->nutrition_name = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->allSorted('fishnutritions', 'nutrition_name');
        if($r){
            foreach($r as $v){
                $data = new Fishnutrition(
                    $v->id,
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
        $r = $m->getOne('fishnutritions','id', $value);
        if($r){
            
            $data = new Fishnutrition(
                $r->id,
                $r->nutrition_name
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE fishnutritions SET nutrition_name=:nutrition_name WHERE id=:id';
            $params = array(':id'=>$this->id,':nutrition_name'=>$this->nutrition_name);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO fishnutritions VALUES (:id,:nutrition_name)';
            $params = array(':id'=>$this->id,':nutrition_name'=>$this->nutrition_name);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('fishnutritions',$this->id);
            return $stmt->rowCount();
        }
    }
}

