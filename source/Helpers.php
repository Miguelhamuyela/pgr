<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Source\Models\Reclamacoes as Claims;

use Source\Models\Users;
use Source\Models\Membros;

function uploadMultipleFiles($files) {
  $target_dir = __DIR__ . "/../Views/uploads/";

  $fileArray = [];

  for ($i = 0; $i < count($files["name"]); ++$i) {
    $newName = uniqid() . "-" . basename($files["name"][$i]);

    $target_file = $target_dir . $newName;

    $uploadOk = 1;

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" 
      && $imageFileType != "pdf") {
      return [
        "type" => "error",
        "result" => "Desculpe, apenas PDF, JPG, JPEG e PNG são permitidos."
      ];
    }

    if (move_uploaded_file($files["tmp_name"][$i], $target_file)) {
      $fileArray[$i] = $newName;
    } else {
      return [
        "type" => "error",
        "result" => "Desculpe, erro ao carregar o seu arquivo."
      ];
    }
  }

  return [
    "type" => "success",
    "result" => $fileArray
  ];
}

function verificarAutenticacoa() {
  return (isset($_SESSION['membros']) || isset($_SESSION['usuario'])) && ((new Membros)->find('id = :id', "id={$_SESSION['membros']['id']}")->count() || (new Users)->find('id = :id', "id={$_SESSION['usuario']['id']}")->count());
}

function enviarEmail($para, $corpo) {
  $mail = new PHPMailer();

  try {
      $mail->SMTPDebug = false;
      $mail->isSMTP();
      
      $mail->Host       = 'mail5.gov.ao';                    // Set the SMTP server to send through
      $mail->SMTPAutoTLS = false;
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'admin@pgr.ao';                     // SMTP username
      $mail->Password   = 'GjHOxHsU';                               // SMTP password
      //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
     $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => true,
                'verify_peer_name' => true,
                'verify_depth' => 3,
                'allow_self_signed' => true
            )
        );
      $mail->CharSet = "utf-8";

      $mail->setFrom('admin@pgr.ao', 'PGR');
      $mail->addAddress($para["email"], $para["nome"]);

      $mail->isHTML(true);
      $mail->Subject = 'PGR - Procuradoria Geral da República';
      $mail->Body    = $corpo;
      $mail->send();
  } catch (Exception $e) {
      return $mail->ErrorInfo;
  }
}

function sendEmail($to, $body) {
  $mail = new PHPMailer();

  try {
      $mail->SMTPDebug = true;
      $mail->isSMTP();
      
      $mail->Host       = 'mail5.gov.ao';                    // Set the SMTP server to send through
      $mail->SMTPAutoTLS = false;
       $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'admin@pgr.ao';                     // SMTP username
      $mail->Password   = 'fLhPUiJ5';                               // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
     $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => true,
                'verify_peer_name' => true,
                'verify_depth' => 3,
                'allow_self_signed' => true
            )
        );
      $mail->CharSet = "utf-8";

      $mail->setFrom('admin@pgr.ao', 'PGR - Procuradoria Geral da República');
      $mail->addAddress($to["email"], $to["nome"]);

      $mail->isHTML(true);
      $mail->Subject = 'PGR - Procuradoria Geral da República';
      $mail->Body    = $body;

      $mail->send();
  } catch (Exception $e) {
      return $mail->ErrorInfo;
  }
}


//Email
function sendEmail1($to, $body) {
  $mail = new PHPMailer();
  
  

  try {
      $mail->SMTPDebug = true;
      $mail->isSMTP();
      
      $mail->Host       = 'mail5.gov.ao';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                 // Enable SMTP authentication
      $mail->SMTPAutoTLS = false;
      $mail->Username   = 'admin@pgr.ao';                     // SMTP username
      $mail->Password   = 'fLhPUiJ5';                               // SMTP password
      //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
      $mail->CharSet = "utf-8";

      $mail->setFrom('admin@pgr.ao', 'PNJ-Prémio Nacional da Juventude');
      $mail->addAddress($to["email"], $to["nome"]);

      $mail->isHTML(true);
      $mail->Subject = 'Candidaturas- Prémio Nacional da Juventude';
      $mail->Body    = $body;

      $mail->send();
  } catch (Exception $e) {
      return $mail->ErrorInfo;
  }
}

function gerarProcesso($totalDeDenuncias) {
//   $numeroDeZeros = 4 - strlen($totalDeDenuncias);
  
  return 'PGR' . date('y') . /* str_repeat('0', $numeroDeZeros) .*/ $totalDeDenuncias;
}

function resource($router, $controllers) { 
  foreach ($controllers as $key => $controller) {
    $router->group(mb_strtolower($key));
    $router->post("/", "{$controller}:create", $controller.".create");
    $router->get("/", "{$controller}:read");

    
    //$router->get("/show/{id}", "{$controller}:show");
    $router->post("/{id}", "{$controller}:update");
    $router->delete("/{id}", "{$controller}:delete");    
  }
}

function jsonFormat($Data) {
$newData = [];

if(!is_array($Data)){
  return $Data->data;
}

foreach ($Data as $key => $data) {
  $newData[$key] = $data->data;
}
return $newData;
}


function safeData($data) {
  $data = array_map("htmlspecialchars", $data);

  $data = array_map("trim", $data);

  $data = array_map("stripslashes", $data);

  return $data;
}

function array_push_assoc($array, $key, $value){
  $array[$key] = $value;
  return $array;
}

function showMessage($message,$type,?string $redirect = null){
  $urlOfRedirect = URL_BASE;
  
  return json_encode([
      "message"=>$message,
      "type"=>$type,
      "redirect"=> $redirect ? $urlOfRedirect.$redirect : $urlOfRedirect
  ]);
}

function active($page): ?string
{
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = explode('/', $url);
    $active = $url[5];
    // var_dump($url);
    // die();
    if ($active == $page) {
        return "active";
    }
    return null;
}

function uploadFiles($file) {
  $target_dir = __DIR__ . "/../Views/uploads/";

  $newName = uniqid() . "-" . basename($file["name"]);

  $target_file = $target_dir . $newName;

  $uploadOk = 1;

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" 
    && $imageFileType != "pdf") {
    return [
      "type" => "error",
      "result" => "Desculpe, apenas PDF, JPG, JPEG e PNG são permitidos."
    ];
  }

  if (move_uploaded_file($file["tmp_name"], $target_file)) {
    return [
      "type" => "success",
      "result" => htmlspecialchars($newName)
    ];
  } else {
    return [
      "type" => "error",
      "result" => "Desculpe, erro ao carregar o seu arquivo."
    ];
  }
}

function validateClaims(Claims $model, array $data){
  $model->nome = mb_convert_case($data["nome"], MB_CASE_TITLE);
  $model->email = filter_var($data["email"], FILTER_SANITIZE_STRING);
  $model->telefone = filter_var($data["telefone"], FILTER_SANITIZE_STRING);
  $model->n_protocolo = filter_var($data["n_protocolo"], FILTER_SANITIZE_STRING);
  $model->reclamacao = filter_var($data["reclamacao"], FILTER_SANITIZE_STRING);
}
