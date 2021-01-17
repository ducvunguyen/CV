<?php
namespace App\Controller;
require 'app/model/User.php';
use App\Model\User;

class UserController {
    private $userModel;
    function __construct()
    {
//        if (!isset($_SESSION['username']))
//            return header('Location: ?c=login');
        $this->userModel = new User();
    }

    function loadDataItems(){

    }
}

$user = new UserController();
$method = $_GET['user'] ?? 'loadDataItems';
$user->$method();

