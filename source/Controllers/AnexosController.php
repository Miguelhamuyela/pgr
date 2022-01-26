<?php

namespace Source\Controllers;

use Source\Models\Anexos as Model;

class AnexosController
{
  public function destroy($data)
  {
    $model = (new Model())->findById($data['id']);

    $model->destroy();
  
    return;
  }
}
