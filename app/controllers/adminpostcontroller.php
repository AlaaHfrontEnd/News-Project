<?php

namespace MVC\controllers;

use MVC\core\controller;

use MVC\core\session;

use MVC\core\helpers;



class adminpostcontroller extends controller{

    public function __construct(){

        session::Start();
        
        $user_data = session::Get('user');
        if(empty($user_data)){
            helpers::redirect("user/login");
        }
       
    }
    public function index(){

        $this->view("back/article", ["title"=>"AdminPost"]);
    }

    public function logout(){
        session::Stop();
        helpers::redirect("home");
    }
}