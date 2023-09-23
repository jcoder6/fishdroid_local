<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Fish extends Model
{
    protected $id;
    protected $fish_name;
    protected $scientific_name;
    protected $family_name_id;
    protected $local_name;
    protected $fish_image;
    protected $fish_info;

    public function __construct($id,$fish_name,$scientific_name,$family_name_id,$local_name,$fish_image,$fish_info)
    {
        parent::__construct();
            $this->id=$id;
            $this->fish_name=$fish_name;
            $this->scientific_name=$scientific_name;
            $this->family_name_id=$family_name_id;
            $this->local_name=$local_name;
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

    public function getFamily_name_id()
    {
        return $this->family_name_id;
    }

    public function getLocal_name()
    {
        return $this->local_name;
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

    public function setFamily_name_id($value)
    {
        $this->family_name_id = $value;
    }

    public function setLocal_name($value)
    {
        $this->local_name = $value;
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
                    $v->family_name_id,
                    $v->local_name,
                    $v->fish_image,
                    $v->fish_info
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getLast15() {
        $m = new Model;
        $list = [];
        $r = $m->get15('fish');
        if($r){
            foreach($r as $v){
                $data = new Fish(
                    $v->id,
                    $v->fish_name,
                    $v->scientific_name,
                    $v->family_name_id,
                    $v->local_name,
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
                $r->family_name_id,
                $r->local_name,
                $r->fish_image,
                $r->fish_info
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE fish SET fish_name=:fish_name,scientific_name=:scientific_name,family_name_id=:family_name_id,local_name=:local_name,fish_image=:fish_image,fish_info=:fish_info WHERE id=:id';
            $params = array(':id'=>$this->id,':fish_name'=>$this->fish_name,':scientific_name'=>$this->scientific_name,':family_name_id'=>$this->family_name_id,':local_name'=>$this->local_name,':fish_image'=>$this->fish_image,':fish_info'=>$this->fish_info);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO fish VALUES (:id,:fish_name,:scientific_name,:family_name_id,:local_name,:fish_image,:fish_info)';
            $params = array(':id'=>$this->id,':fish_name'=>$this->fish_name,':scientific_name'=>$this->scientific_name,':family_name_id'=>$this->family_name_id,':local_name'=>$this->local_name,':fish_image'=>$this->fish_image,':fish_info'=>$this->fish_info);
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

