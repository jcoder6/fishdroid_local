<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Quiz extends Model
{
    protected $id;
    protected $fish_name;
    protected $scientific_name;
    protected $answer;
    protected $option1;
    protected $option2;
    protected $option3;
    protected $quiz_image;

    public function __construct($id,$fish_name,$scientific_name,$answer,$option1,$option2,$option3,$quiz_image)
    {
        parent::__construct();
            $this->id=$id;
            $this->fish_name=$fish_name;
            $this->scientific_name=$scientific_name;
            $this->answer=$answer;
            $this->option1=$option1;
            $this->option2=$option2;
            $this->option3=$option3;
            $this->quiz_image=$quiz_image;
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

    public function getAnswer()
    {
        return $this->answer;
    }

    public function getOption1()
    {
        return $this->option1;
    }

    public function getOption2()
    {
        return $this->option2;
    }

    public function getOption3()
    {
        return $this->option3;
    }

    public function getQuiz_image()
    {
        return $this->quiz_image;
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

    public function setAnswer($value)
    {
        $this->answer = $value;
    }

    public function setOption1($value)
    {
        $this->option1 = $value;
    }

    public function setOption2($value)
    {
        $this->option2 = $value;
    }

    public function setOption3($value)
    {
        $this->option3 = $value;
    }

    public function setQuiz_image($value)
    {
        $this->quiz_image = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->all('quiz');
        if($r){
            foreach($r as $v){
                $data = new Quiz(
                    $v->id,
                    $v->fish_name,
                    $v->scientific_name,
                    $v->answer,
                    $v->option1,
                    $v->option2,
                    $v->option3,
                    $v->quiz_image
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('quiz','id', $value);
        if($r){
            
            $data = new Quiz(
                $r->id,
                $r->fish_name,
                $r->scientific_name,
                $r->answer,
                $r->option1,
                $r->option2,
                $r->option3,
                $r->quiz_image
        );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE quiz SET id=:id,fish_name=:fish_name,scientific_name=:scientific_name,answer=:answer,option1=:option1,option2=:option2,option3=:option3,quiz_image=:quiz_image WHERE id=:id';
            $params = array(':id'=>$this->id,':fish_name'=>$this->fish_name,':scientific_name'=>$this->scientific_name,':answer'=>$this->answer,':option1'=>$this->option1,':option2'=>$this->option2,':option3'=>$this->option3,':quiz_image'=>$this->quiz_image);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO quiz VALUES (:id,:fish_name,:scientific_name,:answer,:option1,:option2,:option3,:quiz_image)';
            $params = array(':id'=>$this->id,':fish_name'=>$this->fish_name,':scientific_name'=>$this->scientific_name,':answer'=>$this->answer,':option1'=>$this->option1,':option2'=>$this->option2,':option3'=>$this->option3,':quiz_image'=>$this->quiz_image);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('quiz',$this->id);
            return $stmt->rowCount();
        }
    }
}

