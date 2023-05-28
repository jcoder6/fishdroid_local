<?php

namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';
class User extends Model
{
    protected $id;
    protected $fullname;
    protected $username;
    protected $email;
    protected $password;
    protected $img;
    protected $created_at;

    public function __construct($id,$fullname,$username,$email,$password,$img,$created_at)
    {
        parent::__construct();
            $this->id=$id;
            $this->fullname=$fullname;
            $this->username=$username;
            $this->email=$email;
            $this->password=$password;
            $this->img=$img;
            $this->created_at=$created_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFullname()
    {
        return $this->fullname;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setFullname($value)
    {
        $this->fullname = $value;
    }

    public function setUsername($value)
    {
        $this->username = $value;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }

    public function setImg($value)
    {
        $this->img = $value;
    }

    public function setCreated_at($value)
    {
        $this->created_at = $value;
    }

    public static function getAll(){
        $m = new Model;
        $list = [];
        $r = $m->all('users');
        if($r){
            foreach($r as $v){
                $data = new User(
                    $v->id, 
                    $v->fullname, 
                    $v->username, 
                    $v->email, 
                    $v->password, 
                    $v->img,
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
        $r = $m->getOne('users','id', $value);
        if($r){
            
            $data = new User(...$r);
            
        }
        return $data;
    }

    public function save(){
        if($this->id){
            $query = 'UPDATE users SET id=:id,fullname=:fullname,username=:username,email=:email,password=:password,img=:img,created_at=:created_at';
            $params = array(':id'=>$this->id,':fullname'=>$this->fullname,':username'=>$this->username,':email'=>$this->email,':password'=>$this->password,':img'=>$this->img,':created_at'=>$this->created_at);
            $result = $this->executeQuery($query,$params);
            return $result;
        }else{
            $query = 'INSERT INTO users VALUES (:id,:fullname,:username,:email,:password,:img,:created_at)';
            $params = array(':id'=>$this->id,':fullname'=>$this->fullname,':username'=>$this->username,':email'=>$this->email,':password'=>$this->password,':img'=>$this->img,':created_at'=>$this->created_at);
            $result = $this->executeQuery($query,$params);
            return $result;
        }
    }

    public function remove()
    {
        if($this->id){
            $stmt=$this->delete('users',$this->id);
            return $stmt->rowCount();
        }
    }
}

