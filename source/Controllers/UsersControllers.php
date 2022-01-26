<?php

namespace Source\Controllers;

use Source\Models\Users as Model;

class UsersController
{
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
        
        $this->model->imagem = $uploadResult["result"];
        $this->model->name = $data["name"];
        $this->model->email = $data["email"];
        $this->model->passoword = $data["passoword"];

        if (!$this->model->save()) {
            echo json_encode([
                "message"=> "Erro ao salvar a Notícia!",
                "type"=> "error"
            ]);

            return;
        }

        echo json_encode([
            "message"=> "Notícia cadastrada com sucesso!",
            "type"=> "success",
            "imagem" => $this->model->imagem
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
