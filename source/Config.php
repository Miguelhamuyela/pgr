<?php

define("DATA_LAYER_CONFIG", [
  "driver" => "mysql",
  "host" => "localhost",
  "port" => "3306",
  "dbname" => "pgr_ao",
  "username" => "pgr_user",
  "passwd" => "{z{&09P%F3a)",
  "options" => [

      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      PDO::ATTR_CASE => PDO::CASE_NATURAL

  ]
]);

function asset($path): string
{
    return URL_BASE."/theme/assets/{$path}";
}

function assetGestor($path): string
{
    return URL_BASE."/theme/assets/gestor/{$path}";
}

define("URL_BASE", "https://pgr.ao");
define("URL_BASE_FILES", "https://pgr.ao/gestor/u/");

define("SMS_ERROR_UPLOAD", [
  "Erro ao carregar o arquivo, tente mais tarde!",
  "Formato do Arquivo não suportado!",
  "O Arquivo posseu um tamanho muito extenso!",
  ""
  ]);
define("CONTROLLERS", [
  "denuncias"=>"DenunciaController",
  "reclamacoes"=>"ReclamacoesController",
  "comunicados"=>"ComunicadosController",
  "noticias"=>"NoticiasController",
  "banners"=>"BannersController",
]);
