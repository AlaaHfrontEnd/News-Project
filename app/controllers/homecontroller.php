<?php 

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\helpers;
use MVC\core\session;

class homecontroller extends controller{

    public function index(){

        $title = "Home";
        $this->view('home/index', ['title'=> $title]);
    }

    public function details(){

        $this->view('home/details', ['title'=>'Details']);
    }
 
}