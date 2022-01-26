<?php

namespace Source\Controllers;

use Source\Models\Reclamacoes;

class PDFController {
  public function index($data) {
    $id = $data["id"];
  
    $seniores = (new Reclamacoes)->find("id = '${id}'")->fetch(true);
  
    $mpdf = new \Mpdf\Mpdf();
  
    $html = '';
    
    $mpdf->WriteHTML($html);
  
    $mpdf->Output();   
  }
}
