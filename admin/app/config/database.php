<?php
namespace App\config;
use PDO;

class DataBase {
    // chung ta se dung thu vien PDO cua PHP de ket noi va thao tac voi du lieu MySQL
    protected $pd;

    function __construct()
    {
        // khoi tao ket noi
        $this->connect();
    }

    protected function connect()
    {
        try {
            $this->pd = new PDO('mysql:host=localhost;dbname=btl;charset=utf8','root','');
            return $this->pd;
        } catch(PDOException $e){
            // co loi toi se in ra de xem
            print_r( $e->getMessage());
            die();
        }
    }

    protected function disconnect()
    {
        // ngat ket noi toi database - PDO
        $this->pd = null;
    }

    function __destruct()
    {
        // tu dong ngat ket noi
        $this->disconnect();
    }
}
?>