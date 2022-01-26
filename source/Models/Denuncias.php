<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Denuncias extends DataLayer
{

    public function __construct()
    {
        parent::__construct("denuncias", [], "id", false);
    }
}
