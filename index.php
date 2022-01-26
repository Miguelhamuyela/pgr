<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

ob_start();
session_start();
$router->get('/email-test1', function(){
  return sendEmail(["email" => 'rivaldo.antonio@infosi.gov.ao', "nome" => ""], "<!DOCTYPE html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap');
      
       .box {
            text-align: center;
            width: 840px;
            font-family: 'Roboto', sans-serif;
        }

        .header {
            margin-top: 30px;
            border: 2px solid #00008b;

        }
        .linha {
        
            background-color: #00008b;
            border: 1px solid #00008b;
        }

  .l{

            background-color: #00008b;
            height: 1.4px;
        }
     
       .ll{

            background-color: #00008b;
            height: 1.4px;
        }
         #utenteName1 {
            letter-spacing: 3px;
            color: #00008b;
            text-align: left;
            margin-left: 1%;
            
        }
         .p {

            text-align: left;
            margin-left: 5%;
        }

        .at {

            text-align: center;

        }
        .cp {

            text-align: left;
        }
       
       
    </style>
</head>
<body>
    <div class='box'>
        <img width='170'
            src='https://ucaf3ed4f43443b9f5bfbefecdc2.previews.dropboxusercontent.com/p/thumb/ABKYkst2v2uRBrmfF8TXwmsEf-4V5pkzMnf7NlPS5QzBjE8b1OjT1hNNNE2aFZNeIm_LIl_tZxLE5Ou8jyZG-jLIyhAwcZxPfReU1UsVlgoqCXkjO1wH_nUsvwd-NDvbjjbWZPbyOI4VXMjC6mT9nE06iPfceiqukMlVoQuPp28CKP50qbV331AkV2YVLRAEkhiCRKWJuuu_bFoet81A3zcNo2eGNNEkY_v8P_kuGwixg38ZRXDNBTvARyiaopbRdNCMvyoePpBfrcnv0ISShDAGa0uDxLN6T1V9C_SjYOG3XARauItdAZSxWhpTRA3xmX2vzmcJR9MoheJU-QPYfF_FwiWIaVFyrbjd4r--OB-AfZwTi3aNM6xcYMgv_oaYX2NXxE_Gy5edMUiti0AN1bd4/p.png?fv_content=true&size_mode=5' />
       
          <hr class='l'>

        <div class='header'>
            <h2 id='utenteName'> Wirijo! </h2>

              <h4 id='utenteName1'> Ola Adilson Camenha,Obrigado por adquirir os nossos serviços! </h4>
            <div class='contentText'>
                <h4 class='p'>
                    <li><b> SERVIÇO:</b> <span class=''>-NETFLIX </span></li>
                </h4>
                <h4 class='p'>
                    <li><b>PLANO:</b> <span class=''>BASIC</span></li>
                </h4>
                <h4 class='p'>
                    <li><b>PREÇO: </b><span class=''>9.000kz</span></li>
                </h4>
                <div class='at'> Atenciosamente Rivaldo Antonio</div>

            </div>
        </div>
        <br>
        <div class='cp'> Email foi processado automaticamente por computador</div>
    <hr class='ll'>
 
    </div>

</body>


</p>");

}, 'login');
$router->namespace("Source\Controllers");
resource($router, CONTROLLERS);
$router->group(null);
$router->get('/', 'Web:index', 'index');
$router->get('/apresentacao', 'Web:SobrePage', 'sobrepage');
$router->get('/quem_e_quem', 'Web:MembrosPage', 'membrospage');
$router->get('/legislacoes', 'Web:LegislacoesPage', 'legislacoespage');
$router->get('/denunciar', 'Web:DenunciasPage', 'denunciaspage');
$router->get('/reclamar', 'Web:ReclamacoesPage', 'reclamacoespage');
$router->get('/noticia', 'Web:NoticiasPage', 'noticiaspage');
$router->get('/noticia_detalhes/{id}', 'Web:DetalhesNoticiasPage', 'detalhesnoticiaspage');
$router->get('/dnpcc', 'Web:DNPCCPage', 'dnpccpage');
$router->get('/dniap', 'Web:DNIAPPage', 'dniappage');
$router->get('/senra', 'Web:SENRAPage', 'senrapage');
$router->get('/pgrsic', 'Web:PGRSICPage', 'pgrsicpage');
$router->post('/denuncias', 'DenunciaController:create', 'denuncias.create');
$router->post('/denuncias/processo/{processo}', 'ConsultasController:index', 'denuncias.consultar');
$router->get('/contacto', 'Web:ContactPage', 'contactpage');

$router->group("gestor");
$router->get('/', 'GestorController:index', 'gestor_index');

/**Login */
$router->get('/login', 'GestorController:login', 'login');
/**Banners */




$router->get('/banners', 'GestorController:BannersPage', 'bannerspage');
$router->post('/banners', 'BannersController:create', 'banners.create');
$router->delete('/banners/{id}', 'BannersController:destroy', 'banners.destroy');
/**Informacoes */
$router->get('/informacoes', 'GestorController:InformacoesPage', 'informacoespage');
$router->post('/informacoes/{id}', 'InformacoesController:update', 'informacoes.update');
/**Noticias */
$router->get('/noticias', 'GestorController:GestorNoticiasPage', 'gestornoticiaspage');
$router->post('/noticias', 'NoticiasController:create', 'noticias.create');
$router->post('/noticias/{id}', 'NoticiasController:update', 'noticias.update');
$router->delete('/noticias/{id}', 'NoticiasController:destroy', 'noticias.destroy');
/**Membros */
$router->get('/membros', 'GestorController:GestorMembrosPage', 'gestormembrospage');
$router->post('/membros', 'MembrosController:create', 'membros.create');
$router->post('/membros/{id}', 'MembrosController:update', 'membros.update');
$router->delete('/membros/{id}', 'MembrosController:destroy', 'membros.destroy');
/**Galeria */
$router->get('/galeria', 'GestorController:GaleriaPage', 'galeriapage');
$router->post('/galeria', 'ArquivosController:create', 'galeria.create');
$router->post('/galeria/{id}', 'ArquivosController:update', 'galeria.update');
$router->delete('/galeria/{id}', 'ArquivosController:destroy', 'galeria.destroy');
/**Arquivos */
$router->get('/arquivos', 'GestorController:ArquivosPage', 'arquivospage');
/**Denúncias */
$router->get('/denuncias', 'GestorController:GestorDenunciasPage', 'gestordenunciaspage');
$router->delete('/denuncias/{id}', 'DenunciaController:destroy', 'destroydenuncia');
$router->post('/denuncias', 'DenunciaController:estado', 'estado');
 
/**Reclamações */
$router->get('/reclamacoes', 'GestorController:GestorReclamacoesPage', 'gestorreclamacoespage');
$router->delete('/reclamacoes/{id}', 'ReclamacoesController:destroy', 'destroyreclamacoes');
$router->post('/reclamacoes', 'ReclamacoesController:create', 'reclamacoes.create');
$router->post('/responder',    'ReclamacoesController:responder', 'reclamacoes.responder');
/**Comunicados */
$router->get('/comunicados', 'GestorController:GestorComunicadosPage', "gestorcomunicadospage");
$router->post('/comunicados', 'ComunicadosController:create', 'comunicados.create');
$router->post('/comunicados/{id}', 'ComunicadosController:update', 'comunicados.update');
$router->delete('/comunicados/{id}', 'ComunicadosController:destroy', 'comunicados.destroy');
/**Contactos */
$router->get('/contactos', 'GestorController:ContactosPage', "contactospage");
$router->post('/contactos', 'ContactosController:create', "contactos.create");
$router->delete('/contactos/{id}', 'ContactosController:destroy', "contactos.destroy");
/**Usuarios */
$router->get('/usuarios', 'GestorController:UsuariosPage', "usuariospage");
$router->post('/usuarios', 'UsersController:create', "usuarios.create");
$router->post('/usuarios/{id}', 'UsersController:update', "usuarios.update");
$router->delete('/usuarios/{id}', 'UsersController:destroy', "usuarios.destroy");
/**Anexos */
$router->delete('/anexos/{id}', 'AnexosController:destroy', 'anexos.destroy');
/**Autenticacao */
$router->post("/autenticacao", "AutenticacaoController:entar", "autenticacao.entrar");
$router->get("/autenticacao", "AutenticacaoController:sair", "autenticacao.sair");



//$router->get('/login_membro', 'GestorController:login_membro', 'login_membro');
//$router->post("/autenticacao", "AutenticacaoController:login_membro", "autenticacao.membro");

$router->get("/u/{file}", function ($data) {
  $file = "Views/uploads/" . $data["file"];
  $handle = fopen($file, "rb");
  $contents = fread($handle, filesize($file));
  fclose($handle);

  $aux = explode(".", $data["file"]);
  $fileType = end($aux);

  switch (strtolower($fileType)) {
    case "png":
      header("content-type: image/png");
      break;

    case "jpg":
      header("content-type: image/jpg");
      break;

    case "jpeg":
      header("content-type: image/jpeg");
      break;

    case "gif":
      header("content-type: image/gif");
      break;

    case "pdf":
      header("content-type: application/pdf");
      break;

    default:
      return;
  }

  echo $contents;
});

$router->get("/logs", function () {
  $logs = (new Log())->find()->order("created_at DESC")->fetch(true);

  if (!$logs) {
    echo json_encode([]);

    return;
  }

  echo json_encode(jsonFormat($logs), JSON_PRETTY_PRINT);

  return;
});

$router->post('/forgot_password', function($data) {
  $userEmail = $data["email"];

  $users = (new User)->find(
    "email = :email", 
    "email={$userEmail}"
  )->fetch(true);

  if (!$users) {
    http_response_code(400);
    return;
  }

  $passwordResetToken = bin2hex(random_bytes(20));
  $passwordResetExpires = time() + (1 * 60 * 60);
  
  $users[0]->passwordResetToken = $passwordResetToken;
  $users[0]->passwordResetExpires = $passwordResetExpires;

  $users[0]->save();

  $mail = new Email();
  
  $templateMsg = "
    <p>Você esqueceu a sua senha? Não tem problema utilize esse 
    link: <a href='https://www.ana.gov.ao/backoffice/reset/{$passwordResetToken}'>Click aqui!</a></p>
  ";
  $mail->add("Redefinição de senha", $templateMsg, "AVIWER", $userEmail);
  $mail->send();
});

$router->post('/reset_password/{token}', function($data) {
  $token = $data["token"];
  $password = $data["password"];
  
  $users = (new User)->find(
    "passwordResetToken = :passwordResetToken",
    "passwordResetToken={$token}"
  )->fetch(true);

  if (!$users) {
    http_response_code(400);
    return;
  }

  if (intval($users[0]->passwordResetExpires) - time() < 0) {
    http_response_code(400);
    echo json_encode(["error" => "Token expirado!"]);
    return;
  }

  $users[0]->senha = password_hash($password, PASSWORD_DEFAULT);

  $users[0]->save();
});

$router->post('/e/send', function($data) {
  if (empty($data["email"]) || empty($data["subject"])
  || empty($data["name"]) || empty($data["body"]) || empty($data["id"])) {
    http_response_code(400);
    return;
  }

  $mail = new Email();
  
  $to = $data["email"];
  $subject = $data["subject"];
  $name = $data["name"];
  $body = $data["body"];
  $mail->add($subject, $body, $name, $to);
  $mail->send();
  
  $contacto = (new Contacto())->findById($data["id"]);
  
  $contacto->estado = 1;
  $contacto->save();
  
  echo json_encode(jsonFormat($contacto));
  return;
});

$router->dispatch();

if ($error = $router->error()) {
  echo $error;
}

ob_flush();
