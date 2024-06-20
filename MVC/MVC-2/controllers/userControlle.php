<?php 

require_once 'models/userModel.php';

class UserController{
    private $userModel ;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function listUsers(){
        $users = $this->userModel->getUser();
        require 'views/list_users.php';
    }

    public function addUser($name, $email) {
        $this->userModel->addUser($name , $email);
        header('Location: index.php');
    }
}
?>