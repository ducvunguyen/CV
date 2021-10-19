<?php
namespace App\Controller;
if(!defined('BASE_PATH_ADMIN')){
    die('Ban khong co quyen truy cap');
}
require 'app/model/User.php'; // goi den file php chua class can su dung
use app\model\User; //goi class de su dung

class LoginController{
    private $userModel;

    public function __construct()
    {
        if (isset($_SESSION['username']))
            return header('Location:?c=dashboard');
        $this->userModel = new User();
    }

    public function index(){
        require 'app/view/login.php';
    }

    public function handleLogin(){
        $username = $_POST['username'];
        $username = strip_tags($username);

        $password = $_POST['password'];
        $password = strip_tags($password);

        if (empty($username) || empty($password)){
            header('Location:?c=login&state=fail');
        }

        $infoUser = $this->userModel->checkLogin($username, md5($password));

        if (count($infoUser) === 0)
            return header('Location:?c=login&state=fail');

        $_SESSION['id'] = $infoUser['id'];
        $_SESSION['username'] = $infoUser['username'];
        $_SESSION['fullname'] = $infoUser['fullname'];
        $_SESSION['address'] = $infoUser['address'];
        $_SESSION['birthday'] = $infoUser['birthday'];
        $_SESSION['avatar'] = $infoUser['avatar'];
        $_SESSION['role'] = $infoUser['role'];
        $_SESSION['email'] = $infoUser['email'];

        return header('Location:?c=dashboard');
    }
}

$login = new LoginController();
$method = $_GET['m'] ?? 'index';
$login->$method();
?>