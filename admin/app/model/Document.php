<?php
namespace App\Model;
require 'app/config/database.php';
use App\config\DataBase;
use PDO;

class Document extends DataBase
{
    public function __construct()
    {
        parent::__construct();
    }

    function getAllData(){
        $resultData = [];
        $sql = "SELECT a.nameFile, a.userId, a.base64, b.fullname FROM documents as a INNER JOIN admins as b where a.userId = b.id";
        $stmt = $this->pd->prepare($sql);
        if ($stmt){
            if ($stmt->execute()){
                $resultData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $stmt->closeCursor();
            }
        }

        return $resultData;
    }

    function uploadFile($data = null){
        $checkSave = false;
        if ($data != null){
            $nameFile = $data['nameFile'];
            $base64 = md5($data['fileBase64']);
            $userId = $_SESSION['id'];
            $sql = "INSERT INTO `documents` (`nameFile`, `base64`, `userId`) VALUES (:nameFile, :base64, :userId)";
            $stmt = $this->pd->prepare($sql);
            if ($stmt){
                $stmt->bindParam(':nameFile', $nameFile, PDO::PARAM_STR);
                $stmt->bindParam(':base64', $base64, PDO::PARAM_STR);
                $stmt->bindParam(':userId', $userId, PDO::PARAM_STR);
                if ($stmt->execute()) $checkSave = true;
                $stmt->closeCursor();
            }
        }

        return $checkSave;
    }
}


?>