<?php

namespace Source\Controllers;

use Source\Models\Users as Model;
use Source\Models\Membros as Model1;

class AutenticacaoController
{


  public function entar($data)
  {
    if (verificarAutenticacoa()) {
      header("Location: " . URL_BASE . "/gestor");
    }

    $email = $data["email"];
    $senha = $data["senha"];
    
    if (empty($email)) {
      http_response_code(401);

      return;
    }

    if (empty($senha)) {
      http_response_code(401);
      
      return;
    }

    $usuario = (new Model())->find(
      "email = :email", 
      "email={$email}"
    )->fetch();
    
    $membros = (new Model1())->find(
      "email = :email", 
      "email={$email}"
    )->fetch();


    if (!$usuario && !$membros) {
      echo json_encode([
        "message"=> "Usuario ou senha Incorrecta",
        "type" => "error",
        "redirect" => URL_BASE. "gestor/"
      ]);

      return;
    }

    if ($usuario) {
      if (!password_verify($senha, $usuario->senha))  {
      
        echo json_encode([
          "message"=> "Usuario ou senha Incorrecta",
          "type" => "error",
          "redirect" => URL_BASE."gestor/"
        ]);
  

        return;
      }

      $_SESSION['usuario'] = [
        "id"=> $usuario->id, 
        "nome" => $usuario->nome, 
        "email" => $usuario->email, 
        "tipo" => $usuario->tipo,
        "nivel" => $usuario->nivel, 
        "foto" => $usuario->foto
      ];
      
  

      echo json_encode([
        "message"=> "Login feito com sucesso!",
        "type" => "success",
        "redirect" => URL_BASE. "pcp/gestor/"
      ]);

      return;   
    }

    if ($membros)
    if (!password_verify($senha, $membros->senha))  {
       

      echo json_encode([
        "message"=> "Usuario ou senha Incorrecta",
        "type" => "error",
        "redirect" => URL_BASE. "pcp/gestor/"
      ]);


      return;
    }

    $_SESSION['membros'] = [
      "id"=> $membros->id, 
      "nome" => $membros->nome, 
      "email" => $membros->email, 
      "tipo" => $membros->tipo, 
      "foto" => $membros->fotografia
     
    ];
   
   
    echo json_encode([
      "message"=> "Login feito com sucesso!",
      "type" => "success",
      "redirect" => URL_BASE. "pcp/gestor/"
    ]);
   
    return;   

  
  }




  public function sair() {
    unset($_SESSION['usuario']);
    unset($_SESSION['membros']);
    

    header("Location: " . URL_BASE . "/gestor/login");
  }
}
