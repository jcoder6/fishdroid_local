<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Fish extends Model
{
    protected $id;
    protected $fish_name;
    protected $scientific_name;
    protected $family_name;
    protected $life_span;
    protected $fish_image;
    protected $fish_info;

    public function __construct($id,$fish_name,$scientific_name,$family_name,$life_span,$fish_image,$fish_info)
    {
        parent::__construct();
            $this->id=$id;
            $this->fish_name=$fish_name;
            $this->scientific_name=$scientific_name;
            $this->family_name=$family_name;
            $this->life_span=$life_span;
            $this->fish_image=$fish_image;
            $this->fish_info=$fish_info;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFish_name()
    {
        return $this->fish_name;
    }

    public function getScientific_name()
    {
        return $this->scientific_name;
    }

    public function getFamily_name()
    {
        return $this->family_name;
    }

    public function getLife_span()
    {
        return $this->life_span;
    }

    public function getFish_image()
    {
        return $this->fish_image;
    }

    public function getFish_info()
    {
        return $this->fish_info;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setFish_name($value)
    {
        $this->fish_name = $value;
    }

    public function setScientific_name($value)
    {
        $this->scientific_name = $value;
    }

    public function setFamily_name($value)
    {
        $this->family_name = $value;
    }

    public function setLife_span($value)
    {
        $this->life_span = $value;
    }

    public function setFish_image($value)
    {
        $this->fish_image = $value;
    }

    public function setFish_info($value)
    {
        $this->fish_info = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->all('fish');
        if($r){
            foreach($r as $v){
                $data = new Fish(
                    $v->id,
                    $v->fish_name,
                    $v->scientific_name,
                    $v->family_name,
                    $v->life_span,
                    $v->fish_image,
                    $v->fish_info
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('fish','id', $value);
        if($r){
            
            $data = new Fish(
                $r->id,
                $r->fish_name,
                $r->scientific_name,
                $r->family_name,
                $r->life_span,
                $r->fish_image,
                $r->fish_info
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE fish SET fish_name=:fish_name,scientific_name=:scientific_name,family_name=:family_name,life_span=:life_span,fish_image=:fish_image,fish_info=:fish_info WHERE id=:id';
            $params = array(':id'=>$this->id,':fish_name'=>$this->fish_name,':scientific_name'=>$this->scientific_name,':family_name'=>$this->family_name,':life_span'=>$this->life_span,':fish_image'=>$this->fish_image,':fish_info'=>$this->fish_info);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO fish VALUES (:id,:fish_name,:scientific_name,:family_name,:life_span,:fish_image,:fish_info)';
            $params = array(':id'=>$this->id,':fish_name'=>$this->fish_name,':scientific_name'=>$this->scientific_name,':family_name'=>$this->family_name,':life_span'=>$this->life_span,':fish_image'=>$this->fish_image,':fish_info'=>$this->fish_info);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('fish',$this->id);
            return $stmt->rowCount();
        }
    }
}

