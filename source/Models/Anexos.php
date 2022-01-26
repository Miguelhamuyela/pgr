<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Anexos extends DataLayer {

    public function __construct(){
        parent::__construct("anexos",[], "id", false);
    }

}