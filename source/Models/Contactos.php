<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Contactos extends DataLayer {

    public function __construct(){
        parent::__construct("contactos", [], "id", false);
    }
    
}