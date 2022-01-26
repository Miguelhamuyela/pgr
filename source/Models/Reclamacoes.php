<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Reclamacoes extends DataLayer
{

    public function __construct()
    {
        parent::__construct("reclamacoes", [
            "nome",
            "email",
            "telefone",
            "n_protocolo",
            "reclamacao",
        ], "id", false);
    }
}
