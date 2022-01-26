<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Membros extends DataLayer
{

    public function __construct()
    {
        parent::__construct("membros", [], "id", false);
    }
}


