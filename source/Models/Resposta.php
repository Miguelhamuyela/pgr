<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Resposta extends DataLayer {

    public function __construct(){
        parent::__construct("respostas", [], "id", false);
    }
    
}