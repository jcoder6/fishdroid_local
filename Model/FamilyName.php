<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class FamilyName extends Model
{
    protected $id;
    protected $family_name;
    protected $created_at;

    public function __construct($id,$family_name,$created_at)
    {
        parent::__construct();
           $this->id=$id;
    $this->family_name=$family_name;
    $this->created_at=$created_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFamily_name()
    {
        return $this->family_name;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setFamily_name($value)
    {
        $this->family_name = $value;
    }

    public function setCreated_at($value)
    {
        $this->created_at = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->allByDates('familynames');
        if($r){
            foreach($r as $v){
                $data = new FamilyName(
                    $v->id,
                    $v->family_name,
                    $v->created_at
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('familynames','id', $value);
        if($r){
            
            $data = new FamilyName(
                $r->id,
                $r->family_name,
                $r->created_at
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE familynames SET family_name=:family_name,created_at=:created_at WHERE id=:id';
            $params = array(':id'=>$this->id,':family_name'=>$this->family_name,':created_at'=>$this->created_at);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO familynames VALUES (:id,:family_name,:created_at)';
            $params = array(':id'=>$this->id,':family_name'=>$this->family_name,':created_at'=>$this->created_at);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('familynames',$this->id);
            return $stmt->rowCount();
        }
    }
}

