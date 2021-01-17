<?php
session_start();
define('BASE_PATH_ADMIN', 'admin/index.php');

class Route {
    public function __construct(){
        if(!isset($_SESSION['username'])) return;
    }

    public function login(){
        require 'app/controller/LoginController.php';
    }

    public function dashboard(){
        require 'app/controller/DashboardController.php';
    }

    public function profile(){
        require 'app/controller/ProfileController.php';
    }

    function __call($r,$q){
        echo "NOT FOUND PAGE";
    }
}

$route = new Route();
$controller = $_GET['c'] ?? 'login';
$route->$controller();
?>