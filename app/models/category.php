<?php

namespace MVC\models;

use MVC\core\model;

class category extends model{

    public function GetAllGategories(){
        $data =  model::db()->rows("SELECT * FROM categories"); 
        return $data;
    }


  
}