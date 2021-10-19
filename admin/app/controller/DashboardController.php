<?php
namespace App\Controller;

require 'app/model/User.php';
use app\Model\User;

class DashboardController{
    private $userModel;

    public function __construct()
    {
//        if(!isset($_SESSION['username'])) return $this->login();
        if(!isset($_SESSION['username'])) return header('Location:?c=login');
        $this->userModel = new User();
    }

    public function index(){
        return require 'app/view/dashboard/index.php';
    }

    public function loadDataItems(){
        $listUser = $this->userModel->getAllUser();
        return require 'app/view/dashboard/datatable.php';
    }

    function show(){
        $userId = $_POST['paramId'];
        $infoUser = $this->userModel->getInfoUserById($userId);
        return require 'app/view/dashboard/dialogs/show.php';
    }

    public function create()
    {
        return require 'app/view/dashboard/dialogs/dialog_user_form.php';
    }

    public function logout(){
        session_destroy();
        header('Location:?c=login');
    }

}

$dashBoard = new DashboardController();
$method = $_GET['d'] ?? 'index';
$dashBoard->$method();
?>