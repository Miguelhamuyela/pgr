<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Users extends DataLayer{

    public function __construct(){
        parent::__construct("users",[], "id", false);
    }

}