<?php
namespace App\Controller;
require 'app/model/User.php';
use App\Model\User;

class  ProfileController{
    private $user;
    public function __construct(){
        $this->user = new User();
    }

    public function index(){
        $infoUser = $this->user->getUserById();
        $listSkill = $this->user->getSkillByUserId();

        require 'app/view/profile/index.php';
    }
}

$profile = new ProfileController();
$method = $_GET['profile'] ?? 'index';
$profile->$method();
?>