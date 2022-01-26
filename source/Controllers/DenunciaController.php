<?php

namespace Source\Controllers;

use Source\Models\Denuncias as Model;
use Source\Models\Documentos;
use Source\Models\SectoresActividades;

class DenunciaController
{
  private $model;

  public function __construct()
  {
    $this->model = new Model();
    $this->documentos = new Documentos();
    $this->SectoresActividades = new SectoresActividades();
  }

  public function update(array $data)
  {
    $this->model = (new Model())->findById($data['id']);

    $this->model->estado = $data["estado"];
  
    if (!$this->model->save()) {

      echo showMessage("Erro ao actualizar os dados, Porfavor tente mais tarde!", "error");

      return;
    }

    echo showMessage("Candidatura Actualizada!", "success");
  }


  public function create(array $data)
  {
    if (in_array("", $data) || !$_FILES["documentos"]["name"]) {
      echo json_encode([
        "message" => "Preencha todos os campos!",
        "type" => "warning"
      ]);

      return;
    }

    $data = safeData($data);

    $this->model->Nome_denunciante = $data["Nome_denunciante"];

    $this->model->email = $data["email"];

    $this->model->Telefone = $data["telefone"];

    $this->model->Actos_corrupcao = $data["actos_corrupcao"];

    $this->model->periodos_factos = $data["periodos_factos"];

    $this->model->suspeitos = $data["suspeitos"];

    $this->model->conhecimento_factos = $data["conhecimento_factos"];

    $this->model->valor_envolvido = $data["valor_envolvido"];

    $this->model->ajudantes = $data["ajudantes"];

    $this->model->provas = $data["provas"];

    $this->model->sectores_actividade = $data["sectores_actividade"];

    $totalDeDenuncias = (new Model())->find()->count() + 1;

    $this->model->processo = gerarProcesso($totalDeDenuncias);

    if (!$this->model->save()) {
      echo $this->model->fail();

      echo json_encode([
        "message" => "Erro ao salvar os dados!",
        "type" => "error"
      ]);

      return;
    }

    if (isset($_FILES["documentos"]) && !empty($_FILES["documentos"]["name"][0])) {
      $uploadResult = uploadMultipleFiles($_FILES["documentos"]);

      if ($uploadResult["type"] === "error") {
        echo json_encode([
          "message" => $uploadResult["result"],
          "type" => "error"
        ]);

        return;
      }

      foreach ($uploadResult["result"] as $file) {
        $documento = new Documentos();

        $documento->src = $file;

        $documento->denuncia = $this->model->id;

        if (!$documento->save()) {
          echo json_encode([
            "message" => "Erro ao salvar o(s) documento(s)!",
            "type" => "error"
          ]);

          return;
        }
      }
    }



    $htmlParaEnviar = '
        <!doctype html>
        <!--Quite a few clients strip your Doctype out, and some even apply their own. Many clients do honor your doctype and it can make things much easier if you can validate constantly against a Doctype.-->
        <html>
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email template By Adobe Dreamweaver CC</title>
        
        <!-- Please use an inliner tool to convert all CSS to inline as inpage or external CSS is removed by email clients -->
        <!-- important in CSS is used to prevent the styles of currently inline CSS from overriding the ones mentioned in media queries when corresponding screen sizes are encountered -->
        
        <style type="text/css">
        body {
          margin: 0;
        }
        body, table, td, p, a, li, blockquote {
          -webkit-text-size-adjust: none!important;
          font-family: sans-serif;
          font-style: normal;
          font-weight: 400;
        }
        button {
          width: 90%;
        }
        
        @media screen and (max-width:600px) {
        /*styling for objects with screen size less than 600px; */
        body, table, td, p, a, li, blockquote {
          -webkit-text-size-adjust: none!important;
          font-family: sans-serif;
        }
        table {
          /* All tables are 100% width */
          width: 100%;
            background-color: #fff;
        }
        table, tr, td{
            background-color: #fff !important;    
            }
        .footer {
          /* Footer has 2 columns each of 48% width */
          height: auto !important;
          max-width: 48% !important;
          width: 48% !important;
        }
        table.responsiveImage {
          /* Container for images in catalog */
          height: auto !important;
          max-width: 30% !important;
          width: 30% !important;
        }
        table.responsiveContent {
          /* Content that accompanies the content in the catalog */
          height: auto !important;
          max-width: 66% !important;
          width: 66% !important;
        }
        .top {
          /* Each Columnar table in the header */
          height: auto !important;
          max-width: 48% !important;
          width: 48% !important;
        }
        .catalog {
          margin-left: 0%!important;
        }
        }
        
        @media screen and (max-width:480px) {
        /*styling for objects with screen size less than 480px; */
        body, table, td, p, a, li, blockquote {
          -webkit-text-size-adjust: none!important;
          font-family: sans-serif;
        }
        table {
          /* All tables are 100% width */
          width: 100% !important;
          border-style: none !important;
        }
        .footer {
          /* Each footer column in this case should occupy 96% width  and 4% is allowed for email client padding*/
          height: auto !important;
          max-width: 96% !important;
          width: 96% !important;
        }
        .table.responsiveImage {
          /* Container for each image now specifying full width */
          height: auto !important;
          max-width: 96% !important;
          width: 96% !important;
        }
        .table.responsiveContent {
          /* Content in catalog  occupying full width of cell */
          height: auto !important;
          max-width: 96% !important;
          width: 96% !important;
        }
        .top {
          /* Header columns occupying full width */
          height: auto !important;
          max-width: 100% !important;
          width: 100% !important;
        }
        .catalog {
          margin-left: 0%!important;
        }
        button {
          width: 90%!important;
        }
        }
        </style>
        </head>
        <body yahoo="yahoo">
        <table width="100%"  cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td style="padding: 50px;background-color: #fff"><table width="639"  align="center" cellpadding="0" cellspacing="0">
                  <!-- Main Wrapper Table with initial width set to 60opx -->
                  <tbody>
                    <tr style="border-bottom: 1px solid #959595;">
                      <td width="637" style="font-size: 20px; font-weight: 300; line-height: 2.5em; font-family: sans-serif; background-color: #fff; padding: 20px; border-bottom: 1px solid #959595;">PGR - Procuradoria Geral da República</td>
                    </tr>
                    <tr> 
                      <!-- HTML Spacer row -->
                      <td style="font-size: 0; line-height: 0; background-color: #fff" height="20"><table width="100%" align="left"  cellpadding="0" cellspacing="0">
                          <tr>
                            <td style="font-size: 0; line-height: 0; background-color: #fff" height="10">&nbsp;</td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr> 
                      <!-- Introduction area -->
                      <td><table width="100%"  align="left" cellpadding="0" cellspacing="0" style="background-color: #fff">
                          <tr style="border-bottom: 1px solid #000;"> 
                            <!-- row container for TITLE/EMAIL THEME -->
                            <td align="center" style="font-size: 21px; font-weight: 600; line-height: 1em; color: #114964; font-family: sans-serif; background-color: #fff; padding: 0px 20px ">CÓDIGO DE REGISTO DE DENÚNCIA</td>
                          </tr>
                          <tr> 
                            <!-- row container for Tagline -->
                            <td align="center" style="font-size: 16px; font-weight:300; color: #929292; font-family: sans-serif;"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333; padding: 20px">' . $this->model->processo . '</p><hr> </td>
                          </tr>
                          <tr>
                            <td style="font-size: 0; line-height: 0;background-color: #fff" height="20"><table width="99%" align="left"  cellpadding="0" cellspacing="0">
                                <tr> 
                                  <!-- HTML Spacer row -->
                                  <td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr style="padding-top:15px;"> 
                            <!-- Row container for Intro/ Description -->
                            <td align="justify" style="Margin:0;padding-top:15px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#000; padding: 20px; text-align:justify"> A sua denúcia foi submetida com sucesso.<br><br> Para consultar o estado da sua denúcia, por favor aceda ao link <a href="http://localhost/pgr/">https://pgr.ao</a> e preencha o campo de pesquisa disposto logo no topo do nosso site. </p> 
                              </td> 
                          </tr>
                          <tr><td align="left" style="Margin:0;padding-top:20px; background-color: #fff"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333; padding: 20px">Atentamente, <br></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333;"></p></tr>
                          
                          <tr style="border-collapse:collapse;"> 
                          <td width="635" valign="top" align="center" style="padding:0;Margin:0;background-color: #fff"> 
                            <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                              <tr style="border-collapse:collapse;"> 
                              <td align="center" style="padding:20px;Margin:0; background-color: #fff"> 
                                <table width="75%" height="100%" cellspacing="0" cellpadding="0" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                                  <tr style="border-collapse:collapse;"> 
                                  <td style="padding:0;Margin:0px 0px 0px 0px;border-bottom:1px solid #CCCCCC;background:none;height:1px;width:100%;margin:0px;"> </td> 
                                  </tr> 
                                </table> </td> 
                              </tr> 
                              <tr style="border-collapse:collapse;"> 
                              <td align="center" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:11px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:17px;color:#333333;">PGR - Procuradoria Geral da República</p> </td> 
                              </tr> 
                            </table> </td> 
                          </tr>
                          <tr style="border-collapse:collapse;"> 
                          <td width="635" valign="top" align="center" style="padding:0;Margin:0;"> 
                            <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                              <tr style="border-collapse:collapse;"> 
                              <td class="es-infoblock" align="center" style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC;"><img src="http://localhost/pgr/theme/assets/assets/img/logo_black_hand.png" alt="" width="225" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"> </a> </td> 
                              </tr> 
                            </table> </td> 
                          </tr>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table>
        </body>
        </html>';

        sendEmail(["email" => $this->model->email, "nome" => $this->model->Nome_denunciante], $htmlParaEnviar);

    echo json_encode([
      "message" => "Denúncia feita com sucesso, verifique por favor o seu email.",
      "type" => "success",
    ]);

    return;
  }

 

  public function destroy($data)
  {
    $denuncia = (new Model())->findById($data['id']);

    $denuncia->destroy();
    echo showMessage("Denúncia Eliminada com sucesso!", "success");
  }
}
