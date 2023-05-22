<?php
require_once 'models/user.php';

class userController{
    public function index(){
        echo "Controllador for users, Index actions";
    }

    public function registration(){
        require_once 'views/user/register.php';
    }

    public function save(){
        if (isset($_POST)) {
            $user = new User();
            $user->setName($_POST['name']);
            $user->setLastname($_POST['lastname']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $save = $user->save();
            if($save){
                $_SESSION['register'] = "complete";
            }else{
                $_SESSION['register'] = "failed";
            }
        }else{
            $_SESSION['register'] = "failed";
        }
        header("Location:".base_url.'User/save');
    }
}