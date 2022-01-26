<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class respostas_reclamacoes extends DataLayer
{

    public function __construct()
    {
        parent::__construct("respostas_reclamacoes", [], "id", false);
    }
}


