<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Term extends Model
{
    protected $id;
    protected $tech_term;
    protected $tech_desc;
    protected $term_img;

    public function __construct($id,$tech_term,$tech_desc,$term_img)
    {
        parent::__construct();
           $this->id=$id;
    $this->tech_term=$tech_term;
    $this->tech_desc=$tech_desc;
    $this->term_img=$term_img;
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

    public function getTerm_img()
    {
        return $this->term_img;
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

    public function setTerm_img($value)
    {
        $this->term_img = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->allByDates('terms');
        if($r){
            foreach($r as $v){
                $data = new Term(
                    $v->id,
                    $v->tech_term,
                    $v->tech_desc,
                    $v->term_img
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
            
            $data = new Term(
                $r->id,
                $r->tech_term,
                $r->tech_desc,
                $r->term_img
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE terms SET tech_term=:tech_term,tech_desc=:tech_desc,term_img=:term_img WHERE id=:id';
            $params = array(':id'=>$this->id,':tech_term'=>$this->tech_term,':tech_desc'=>$this->tech_desc,':term_img'=>$this->term_img);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO terms VALUES (:id,:tech_term,:tech_desc,:term_img)';
            $params = array(':id'=>$this->id,':tech_term'=>$this->tech_term,':tech_desc'=>$this->tech_desc,':term_img'=>$this->term_img);
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

