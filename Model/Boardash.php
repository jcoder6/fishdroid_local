<?php 
    
namespace Makkari\Models;

use Makkari\Models\Model;
require_once './Model/Model.php';

class DashboardModel extends Model {
    protected $fishCount;
    protected $triviaCount;
    protected $termCount;
    protected $userCount;

    public function getFishCount() {
        $fishCount = $this->fishCount();
        return $fishCount;
    }

    public function fishCount() {
        $query = "SELECT COUNT(*) as fish_count FROM fish";
        $result = $this->executeQuery($query);

        if($result){
            $row = $result->fetch(\PDO::FETCH_OBJ);
            return $row->fish_count;
        } else {
            echo 'error occured';
            die();
        }
    }
    public function getUserCount() {
        return $this->userCount();
    }

    public function userCount() {
        $query = "SELECT COUNT(*) as user_count FROM users";
        $result = $this->executeQuery($query);

        if($result){
            $row = $result->fetch(\PDO::FETCH_OBJ);
            return $row->user_count;
        } else {
            echo 'error occured';
            die();
        }
    }

    public function getTriviaCount() {
        return $this->triviaCount();
    }

    public function triviaCount() {
        $query = "SELECT COUNT(*) as jokes_count FROM jokes";
        $result = $this->executeQuery($query);

        if($result){
            $row = $result->fetch(\PDO::FETCH_OBJ);
            return $row->jokes_count;
        } else {
            echo 'error occured';
            die();
        }
    }

    public function getTermCount() {
        return $this->termCount();
    }

    public function termCount(){
        $query = "SELECT COUNT(*) as terms_count FROM terms";
        $result = $this->executeQuery($query);

        if($result){
            $row = $result->fetch(\PDO::FETCH_OBJ);
            return $row->terms_count;
        } else {
            echo 'error occured';
            die();
        }
    }
}
