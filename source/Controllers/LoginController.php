<?php

namespace Source\Controllers;

use Source\Models\Users;

abstract class LoginController
{
    /** @var Engine */
    protected $view;

    /** @var Router */
    protected $router;

    public function __contruct(){
        $this->model = new Users();
    }
    public static function login(array $data)
    {
     $model = new Users();
     $model = $model->find("email = 'utente@pnj.gov.ao'")->fetch();
     if(!$model){
        echo showMessage("Usuários não encontrado", "warning");
        $_SESSION["User"] = false;
     }
     $verifyPassword = \password_verify("12345", $model->password);

     if(!$verifyPassword){
        $_SESSION["User"] = false;
     }

     $_SESSION["User"] = true;
    }
}
