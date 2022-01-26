<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class SectoresActividades extends DataLayer{

    public function __construct(){
        parent::__construct("sectores_actividade",["nome"], "id", false);
    }

}