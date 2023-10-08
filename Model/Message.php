<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class Message extends Model
{
    protected $id;
    protected $email;
    protected $message;
    protected $is_read;
    protected $created_at;

    public function __construct($id,$email,$message,$is_read,$created_at)
    {
        parent::__construct();
           $this->id=$id;
    $this->email=$email;
    $this->message=$message;
    $this->is_read=$is_read;
    $this->created_at=$created_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getIs_read()
    {
        return $this->is_read;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function setMessage($value)
    {
        $this->message = $value;
    }

    public function setIs_read($value)
    {
        $this->is_read = $value;
    }

    public function setCreated_at($value)
    {
        $this->created_at = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->allByDates('messages');
        if($r){
            foreach($r as $v){
                $data = new Message(
                    $v->id,
                    $v->email,
                    $v->message,
                    $v->is_read,
                    $v->created_at
                );
                $list[] = $data;
            }
        }
        return $list;
    }

    public function isRead() {
        echo ($this->is_read) ? 'font-normal' : 'font-bold';
    }

    public function msgIcon() {
        echo (!$this->is_read) ? '<i class="fa-regular fa-envelope"></i>' : '<i class="fa-regular fa-envelope-open"></i>';
    }

    public function msgNotif() {
        echo (!$this->is_read) ? 'visible' : 'invisible';
    }

    public static function getById($value){
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('messages','id', $value);
        if($r){
            
            $data = new Message(
                $r->id,
                $r->email,
                $r->message,
                $r->is_read,
                $r->created_at
            );
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE messages SET is_read=:is_read WHERE id=:id';
            $params = array(':id'=>$this->id,':is_read'=>$this->is_read);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO messages VALUES (:id,:email,:message,:is_read,:created_at)';
            $params = array(':id'=>$this->id,':email'=>$this->email,':message'=>$this->message,':is_read'=>$this->is_read,':created_at'=>$this->created_at);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('messages',$this->id);
            return $stmt->rowCount();
        }
    }
}

