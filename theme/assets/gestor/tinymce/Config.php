<?php
define("URL_BASE", "http://localhost/Bombeiros");
define("URL_BASE_VIEWS", "http://localhost/Bombeiros/Views/Admin");

define("DATA_LAYER_CONFIG", [
  "driver" => "mysql",
  "host" => "localhost",
  "port" => "3306",
  "dbname" => "bombeiros",
  "username" => "root",
  "passwd" => "",
  "options" => [
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_CASE => PDO::CASE_NATURAL
  ]
]);
define("URL_ASSET","/../assets/");
define("CONTROLLERS",[
  "arquivos" => "ArquivosController",
  "contactos" => "ContactosController",
  "posts" => "PostsController",
  "servicos"=>"ServicosController",
  "conteudos"=>"ConteudoController",
  "users"=>"UserController"

  ]);

function asset($path): string
{
    return URL_BASE."/Views/_cdn{$path}";
}
/**
 *  CONFIG DATABASE
 */

function notify($color, $icon, $title, $timer = 3000)
{
    return [
        'color' => $color,
        'icon' => $icon,
        'title' => $title,
        'timer' => $timer
    ];
}
 

  


