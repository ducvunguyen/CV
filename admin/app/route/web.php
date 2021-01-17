<?php
session_start();
define('BASE_PATH_ADMIN', 'admin/index.php');

class Route {
    public function login(){
    require 'app/controller/LoginController.php';
}

    public function dashboard(){
        require 'app/controller/DashboardController.php';
    }

    function __call($r,$q){
        echo "NOT FOUND PAGE";
    }
}

$route = new Route();
$controller = $_GET['c'] ?? 'login';
$route->$controller();
?>