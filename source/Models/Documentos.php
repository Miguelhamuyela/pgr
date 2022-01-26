<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Documentos extends DataLayer{

    public function __construct(){
        parent::__construct("documentos",[], "id", false);
    }

}