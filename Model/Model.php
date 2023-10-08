<?php

namespace Makkari\Models;

require_once("./Config/config.php");
class Model
{
    private $conn;
    public function __construct()
    {
        $this->conn = new \PDO("mysql:host=" . SERVER . ";dbname=" . DB_NAME . "", USERNAME, PASSWORD);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    protected function executeQuery($query, $params = array())
    {
        try {
            $stmt  = $this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }
    protected function executeMultiQuery($query, $params = array())
    {
        try {
            $stmt  = $this->conn->prepare($query);
            $stmt->execute($params);
            do {
                if ($result = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
                    return $result;
                }
            } while ($stmt->nextRowset());

            // return $stmt;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getOne($table, $field, $id)
    {
        $stmt = $this->executeQuery("SELECT * FROM $table WHERE $field=:id", array(':id' => $id));
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
    public function all($table)
    {
        $stmt = $this->executeQuery("SELECT * FROM $table");
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function allByDates($table)
    {
        $stmt = $this->executeQuery("SELECT * FROM $table ORDER BY id DESC");
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function get15($table) {
        $stmt = $this->executeQuery("SELECT * FROM $table
        ORDER BY id DESC
        LIMIT 15 OFFSET 0");
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function allById($table, $field,$id) {
        $stmt = $this->executeQuery("SELECT * FROM $table WHERE $field=:id", array(':id' => $id));
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function delete($table, $id)
    {
        $stmt = $this->executeQuery("DELETE FROM $table WHERE id=:id", array(':id' => $id));
        return $stmt;
    }

    public function beginTransaction()
    {
        try {
            $this->conn->beginTransaction();
        } catch (\PDOException $e) {
            echo "Error starting transaction: " . $e->getMessage();
            return false;
        }
        return true;
    }
    public function commitTransaction()
    {
        try {
            $this->conn->commit();
        } catch (\PDOException $e) {
            echo "Error committing transaction: " . $e->getMessage();
            return false;
        }
        return true;
    }

    public function rollbackTransaction()
    {
        try {
            $this->conn->rollBack();
        } catch (\PDOException $e) {
            echo "Error rolling back transaction: " . $e->getMessage();
            return false;
        }
        return true;
    }
}
