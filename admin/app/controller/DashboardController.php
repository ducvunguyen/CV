<?php
namespace App\Controller;
require 'app/model/User.php';
use app\Model\User;
use http\Client\Response;

class DashboardController{
    private $userModel;

    public function __construct()
    {
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

    function showModalEdit(){
        $idUser = $_POST['id'];
        $infoUser = $this->userModel->getInfoUserById($idUser);
        return require 'app/view/dashboard/dialogs/dialog_user_update_form.php';
    }

    function update(){
        $save = $this->userModel->update($_GET['id'], $_POST);
        if ($save) return $this->response('Cập nhật thành công', 1);
        return $this->response('Cập nhật thất bại');
    }

    function store(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullName = $_POST['fullname'];
        if ($username == null) return $this->response('Tên tài khoản không có được để trông', 0);
        if ($password == null) return $this->response('Mật khẩu không có được để trông', 0);
        if ($fullName == null) return $this->response('Mật khẩu không có được để trông', 0);
        $saveUser = $this->userModel->store($_POST);
        if ($saveUser)
            return $this->response('Thêm thành công', 1);

        return $this->response('Thêm thất bại');
    }

    function response($message, $status = 0){ // status = 1 thanh cong // 0 that bai
        echo $status;
    }

    function destroy(){
        $userId = $_POST['id'];
        $deleteUser = $this->userModel->destroy($userId);

        if ($deleteUser) return $this->response('Xóa thành công', 1);
        return $this->response('Xóa thất bại');

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