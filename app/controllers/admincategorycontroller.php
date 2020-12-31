<?php

namespace MVC\controllers;

use MVC\core\controller;

use MVC\core\session;

use MVC\core\helpers;

use MVC\models\category;


class admincategorycontroller extends controller{

    public function __construct(){

        session::Start();
        
        $user_data = session::Get('user');
        if(empty($user_data)){
            helpers::redirect("user/login");
        }
       
    }
    public function index(){

        $category = new category();
        $data = $category->GetAllGategories();

        $this->view("back/category", ["title"=>"AdminPost", "data"=>$data]);
    }

    public function logout(){
        session::Stop();
        helpers::redirect("home");
    }
}