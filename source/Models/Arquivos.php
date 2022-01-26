<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Arquivos extends DataLayer {

    public function __construct(){
        parent::__construct("arquivos",[], "id", false);
    }
    
}