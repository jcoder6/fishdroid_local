<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Quiz extends Model
{
    protected $id;
    protected $quiz_answer;
    protected $quiz_hint;
    protected $quiz_image;

    public function __construct($id,$quiz_answer,$quiz_hint,$quiz_image)
    {
        parent::__construct();
           $this->id=$id;
    $this->quiz_answer=$quiz_answer;
    $this->quiz_hint=$quiz_hint;
    $this->quiz_image=$quiz_image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuiz_answer()
    {
        return $this->quiz_answer;
    }

    public function getQuiz_hint()
    {
        return $this->quiz_hint;
    }

    public function getQuiz_image()
    {
        return $this->quiz_image;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setQuiz_answer($value)
    {
        $this->quiz_answer = $value;
    }

    public function setQuiz_hint($value)
    {
        $this->quiz_hint = $value;
    }

    public function setQuiz_image($value)
    {
        $this->quiz_image = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->allByDates('quiz');
        if($r){
            foreach($r as $v){
                $data = new Quiz(
                    $v->id,
                    $v->quiz_answer,
                    $v->quiz_hint,
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
                $r->quiz_answer,
                $r->quiz_hint,
                $r->quiz_image
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE quiz SET quiz_answer=:quiz_answer,quiz_hint=:quiz_hint,quiz_image=:quiz_image WHERE id=:id';
            $params = array(':id'=>$this->id,':quiz_answer'=>$this->quiz_answer,':quiz_hint'=>$this->quiz_hint,':quiz_image'=>$this->quiz_image);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO quiz VALUES (:id,:quiz_answer,:quiz_hint,:quiz_image)';
            $params = array(':id'=>$this->id,':quiz_answer'=>$this->quiz_answer,':quiz_hint'=>$this->quiz_hint,':quiz_image'=>$this->quiz_image);
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

