<?php

namespace Source\Controllers;

use Source\Models\Denuncias;

class ConsultasController {
  public function index($data) {
    $processo = $data["processo"];
  
    $denuncia = (new Denuncias)->find("processo = '${processo}'")->fetch();

    if (!$denuncia) {
      echo json_encode([
          "message"=> "Verifique o número de processo da sua denúncia!",
          "type"=> "error"
      ]);

      return;
    }

    echo json_encode([
      "processo" => $denuncia->processo,
      "estado" => $denuncia->estados
    ]);
  }
}
