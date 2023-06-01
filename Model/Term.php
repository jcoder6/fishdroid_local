<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Term extends Model
{
    protected $id;
    protected $tech_term;
    protected $tech_desc;

    public function __construct($id,$tech_term,$tech_desc)
    {
        parent::__construct();
           $this->id=$id;
    $this->tech_term=$tech_term;
    $this->tech_desc=$tech_desc;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTech_term()
    {
        return $this->tech_term;
    }

    public function getTech_desc()
    {
        return $this->tech_desc;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setTech_term($value)
    {
        $this->tech_term = $value;
    }

    public function setTech_desc($value)
    {
        $this->tech_desc = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->all('terms');
        if($r){
            foreach($r as $v){
                $data = new Term(
                    $v->id, 
                    $v->tech_term,
                    $v->tech_desc
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('terms','id', $value);
        if($r){
            
            $data = new Term(...$r);
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE terms SET id=:id,tech_term=:tech_term,tech_desc=:tech_desc';
            $params = array(':id'=>$this->id,':tech_term'=>$this->tech_term,':tech_desc'=>$this->tech_desc);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO terms VALUES (:id,:tech_term,:tech_desc)';
            $params = array(':id'=>$this->id,':tech_term'=>$this->tech_term,':tech_desc'=>$this->tech_desc);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('terms',$this->id);
            return $stmt->rowCount();
        }
    }
}

