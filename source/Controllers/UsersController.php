<?php

namespace Source\Controllers;

use Source\Models\Users as Model;

class UsersController {
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function create(array $data)
    {
        if (in_array("", $data) || !$_FILES["imagem"]["name"]) {            
            echo json_encode([
                "message"=> "Preencha todos os campos!",
                "type"=> "warning"
            ]);

            return;
        }

        $uploadResult = uploadFiles($_FILES["imagem"]);

        if ($uploadResult["type"] === "error") {
            echo json_encode([
                "message"=> $uploadResult["result"],
                "type"=> "error"
            ]);

            return;
        }
        
        $this->model->foto = $uploadResult["result"];
        $this->model->nome = $data["nome"];
        $this->model->sobrenome = $data["sobrenome"];
        $this->model->email = $data["email"];
        $this->model->senha = password_hash(strtolower($this->model->nome) . "." . strtolower($this->model->sobrenome), PASSWORD_DEFAULT);
        $this->model->nivel = $data["nivel"];

        if (!$this->model->save()) {
            echo json_encode([
                "message"=> "Erro ao salvar o Utilizador!",
                "type"=> "error"
            ]);

            return;
        }

        echo json_encode([
            "message"=> "Utilizador cadastrado com sucesso!",
            "type"=> "success",
            "imagem" => $this->model->imagem
        ]);

        return;
    }

    public function update(array $data)
    {
        $this->model = (new Model())->findById($data['id']);

        if (isset($_FILES["imagem"]) && $_FILES["imagem"]["name"]) {
            $uploadResult = uploadFiles($_FILES["imagem"]);

            if ($uploadResult["type"] === "error") {
                echo json_encode([
                    "message"=> $uploadResult["result"],
                    "type"=> "error"
                ]);

                return;
            }
        
            $this->model->foto = $uploadResult["result"];
        }

        if (isset($data["nome"])) $this->model->nome = $data["nome"];
        if (isset($data["sobrenome"])) $this->model->sobrenome = $data["sobrenome"];
        if (isset($data["email"])) $this->model->email = $data["email"];
        
           if (isset($data["senha"])) $this->model->senha = password_hash(strtolower($data["senha"]), PASSWORD_DEFAULT);
        if (isset($data["nivel"])) $this->model->nivel = $data["nivel"];

        if (!$this->model->save()) {
            echo json_encode([
                "message"=> "Erro ao actualizar o Utilizador!",
                "type"=> "error"
            ]);

            return;
        }

        echo json_encode([
            "message"=> "Utilizador actualizado com sucesso!",
            "type"=> "success",
        ]);

        return;
    }

    public function destroy($data)
    {
        $this->model = (new Model())->findById($data['id']);

        $this->model->destroy();

        return;
    }
}
