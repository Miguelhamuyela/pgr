<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Banners extends DataLayer{

    public function __construct(){
        parent::__construct("banners",[], "id", false);
    }
    
}