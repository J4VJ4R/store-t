<?php

class userController{
    public function index(){
        echo "Controllador for users, Index actions";
    }

    public function registration(){
        require_once 'views/user/register.php';
    }

    public function save(){
        if (isset($_POST)) {
            var_dump($_POST);
        }
    }
}