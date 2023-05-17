<?php

namespace Makkari\Models;

use Makkari\Models\Model;

require_once './Model/Model.php';
class Role extends Model
{
    protected $id;
    protected $role_name;
    protected $description;

    public function __construct($id, $role_name, $description)
    {
        parent::__construct();
        $this->id = $id;
        $this->role_name = $role_name;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRole_name()
    {
        return $this->role_name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setRole_name($value)
    {
        $this->role_name = $value;
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }

    public static function getAll()
    {
        $m = new Model;
        $list = [];
        $r = $m->all('roles');
        if ($r) {
            foreach ($r as $v) {
                $data = new Role(...$v);
                $list[] = $data;
            }
        }
        return $list;
    }

    public static function getById($value)
    {
        $m = new Model;
        $data = NULL;
        $r = $m->getOne('roles', 'id', $value);
        if ($r) {

            $data = new Role(...$r);
        }
        return $data;
    }

    public function save()
    {
        if ($this->id) {
            $query = 'UPDATE roles SET role_name=:role_name,description=:description WHERE id=:id';
            $params = array(':id' => $this->id, ':role_name' => $this->role_name, ':description' => $this->description);
            $result = $this->executeQuery($query, $params);
            return $result;
        } else {
            $query = 'INSERT INTO roles VALUES (:id,:role_name,:description)';
            $params = array(':id' => $this->id, ':role_name' => $this->role_name, ':description' => $this->description);
            $result = $this->executeQuery($query, $params);
            return $result;
        }
    }

    public function remove()
    {
        if ($this->id) {
            $stmt = $this->delete('roles', $this->id);
            return $stmt->rowCount();
        }
    }
}
