<?php
namespace App\Model;

if(!defined('BASE_PATH_ADMIN')){
    die('Ban khong co quyen truy cap');
}

require 'app/config/database.php';
use app\config\DataBase;
use PDO;

class User extends DataBase{
    public function __construct()
    {
        parent::__construct();
    }

    public function checkLogin($username, $password){
        $data = [];
        $sql = "SELECT * FROM admins as a 
                where a.username = :username and a.password = :password LIMIT 1";

        $stmt = $this->pd->prepare($sql);
        if ($stmt){
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            if ($stmt->execute())
                if ($stmt->rowCount() > 0) $data = $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt->closeCursor();
        }

        return $data;
    }

    public function getAllUser(){
        $data = [];
        $sql = "SELECT * FROM admins";
        $stmt = $this->pd->prepare($sql);
        if ($stmt->execute())
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $data;
    }

    public function getInfoUserById($userId) {
        $infoUser = [];
        $sql = "SELECT b.id, b.fullname, email, address, birthday, a.name_user_skill, c.name_skill, c.process 
                FROM skill_users as a 
                inner join users as b on a.id = b.skill_user_id 
                inner join skills as c on a.id = c.skill_user_id 
                where b.id = :userId Limit 1";

        $stmt = $this->pd->prepare($sql);
        if ($stmt){
           $stmt->bindParam(':userId', $userId, PDO::PARAM_STR);
            if ($stmt->execute())
                $infoUser = $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt->closeCursor();
        }

        return $infoUser;
    }

    public function getUserById(){
        $infoUser = null;
        $userID = $_SESSION['id'];
        $sql = "SELECT * FROM users as a where a.id = :userId limit 1";

        $stmt = $this->pd->prepare($sql);

        if ($stmt){
            $stmt->bindParam(':userId', $userID, PDO::PARAM_STR);
            if ($stmt->execute())
                $infoUser = $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt->closeCursor();
        }

        return $infoUser;
    }

    function getSkillByUserId(){
        $listSkill = [];
        $userID = $_SESSION['id'];
        $sql = "SELECT * FROM skills as a where a.userId = :userId";

        $stmt = $this->pd->prepare($sql);

        if ($stmt){
            $stmt->bindParam(':userId', $userID, PDO::PARAM_STR);
            if ($stmt->execute())
                $listSkill = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $stmt->closeCursor();
        }

        return $listSkill;
    }

    function store($data = null){
        $checkSave = false;
        if ($data != null){
            $username = $data['username'];
            $password = md5($data['password']);
            $fullname = $data['fullname'];
            $code = $data['code'];
            $sql = "INSERT INTO `admins` (`username`, `password`, `code`, `fullname`) VALUES (:username, :password, :code, :fullname)";
            $stmt = $this->pd->prepare($sql);
            if ($stmt){
                $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                $stmt->bindParam(':password', $password, PDO::PARAM_STR);
                $stmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
                $stmt->bindParam(':code', $code, PDO::PARAM_STR);
                if ($stmt->execute()) $checkSave = true;
                $stmt->closeCursor();
            }
        }

        return $checkSave;
    }

    function destroy($userId = null){
        $checkDelete = false; //false là chua xoa, true xoa thanh cong
        $sql = "DELETE FROM `admins` WHERE id = :id";
        $stmt = $this->pd->prepare($sql);
        if ($stmt) {
            $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
            if ($stmt->execute()) $checkDelete = true;
            echo $checkDelete;
            $stmt->closeCursor();
        }
        return $checkDelete;
    }
}
?>

