<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Log extends DataLayer {
  public function __construct()
  {
    parent::__construct("db_log", ["user", "acao", "tabela"], "id", false);
  }
}
