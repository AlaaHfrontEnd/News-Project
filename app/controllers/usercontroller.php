<?php


namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\helpers;
use MVC\models\user;
use MVC\core\session;


class usercontroller extends controller{


    public function __construct(){

        session::Start();

       
    }

    public function index(){

        echo 'user';
    }

    public function login(){

        $this->view("home/login", ["title"=>"Login"]);
    }

    public function postlogin(){

      
            $user = new user();

            $data =  $user->GetUser($_POST['email'], $_POST['password']);
            

            session::Set('user', $data);

            helpers::redirect("adminpost/index");
 
        


    }

}