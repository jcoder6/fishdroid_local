<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Recipe extends Model
{
    protected $id;
    protected $fish_id;
    protected $recipe_name;
    protected $recipe_steps;
    protected $recipe_img;

    public function __construct($id,$fish_id,$recipe_name,$recipe_steps,$recipe_img)
    {
        parent::__construct();
           $this->id=$id;
    $this->fish_id=$fish_id;
    $this->recipe_name=$recipe_name;
    $this->recipe_steps=$recipe_steps;
    $this->recipe_img=$recipe_img;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFish_id()
    {
        return $this->fish_id;
    }

    public function getRecipe_name()
    {
        return $this->recipe_name;
    }

    public function getRecipe_steps()
    {
        return $this->recipe_steps;
    }

    public function getRecipe_img()
    {
        return $this->recipe_img;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setFish_id($value)
    {
        $this->fish_id = $value;
    }

    public function setRecipe_name($value)
    {
        $this->recipe_name = $value;
    }

    public function setRecipe_steps($value)
    {
        $this->recipe_steps = $value;
    }

    public function setRecipe_img($value)
    {
        $this->recipe_img = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->all('recipes');
        if($r){
            foreach($r as $v){
                $data = new Recipe(
                    $v->id,
                    $v->fish_id,
                    $v->recipe_name,
                    $v->recipe_steps,
                    $v->recipe_img
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('recipes','id', $value);
        if($r){
            
            $data = new Recipe(
                $r->id,
                $r->fish_id,
                $r->recipe_name,
                $r->recipe_steps,
                $r->recipe_img
            );
            
        }
        return $data;
    }

    public static function getAllById($value){
        $m = new Model;
        $list = [];
        $r = $m->allById('recipes', 'fish_id', $value);
        if($r){
            foreach($r as $v){
                $data = new Recipe(
                    $v->id,
                    $v->fish_id,
                    $v->recipe_name,
                    $v->recipe_steps,
                    $v->recipe_img
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE recipes SET fish_id=:fish_id,recipe_name=:recipe_name,recipe_steps=:recipe_steps,recipe_img=:recipe_img WHERE id=:id';
            $params = array(':id'=>$this->id,':fish_id'=>$this->fish_id,':recipe_name'=>$this->recipe_name,':recipe_steps'=>$this->recipe_steps,':recipe_img'=>$this->recipe_img);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO recipes VALUES (:id,:fish_id,:recipe_name,:recipe_steps,:recipe_img)';
            $params = array(':id'=>$this->id,':fish_id'=>$this->fish_id,':recipe_name'=>$this->recipe_name,':recipe_steps'=>$this->recipe_steps,':recipe_img'=>$this->recipe_img);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('recipes',$this->id);
            return $stmt->rowCount();
        }
    }
}

