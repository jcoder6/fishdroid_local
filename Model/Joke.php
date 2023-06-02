<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Joke extends Model
{
    protected $id;
    protected $question;
    protected $answer;
    protected $joke_image;

    public function __construct($id,$question,$answer,$joke_image)
    {
        parent::__construct();
           $this->id=$id;
    $this->question=$question;
    $this->answer=$answer;
    $this->joke_image=$joke_image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function getAnswer()
    {
        return $this->answer;
    }

    public function getJoke_image()
    {
        return $this->joke_image;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setQuestion($value)
    {
        $this->question = $value;
    }

    public function setAnswer($value)
    {
        $this->answer = $value;
    }

    public function setJoke_image($value)
    {
        $this->joke_image = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->all('jokes');
        if($r){
            foreach($r as $v){
                $data = new Joke(
                    $v->id,
                    $v->question,
                    $v->answer,
                    $v->joke_image
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('jokes','id', $value);
        if($r){
            
            $data = new Joke(
                $r->id,
                $r->question,
                $r->answer,
                $r->joke_image
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE jokes SET question=:question,answer=:answer,joke_image=:joke_image WHERE id=:id';
            $params = array(':id'=>$this->id,':question'=>$this->question,':answer'=>$this->answer,':joke_image'=>$this->joke_image);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO jokes VALUES (:id,:question,:answer,:joke_image)';
            $params = array(':id'=>$this->id,':question'=>$this->question,':answer'=>$this->answer,':joke_image'=>$this->joke_image);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('jokes',$this->id);
            return $stmt->rowCount();
        }
    }
}

