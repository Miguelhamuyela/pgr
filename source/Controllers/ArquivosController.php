<?php

namespace Source\Controllers;

use Source\Models\Arquivos as Model;

class ArquivosController
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function create(array $data)
    {
        if (isset($_FILES["imagem"]) && $_FILES["imagem"]["name"]) {
            $uploadResult = uploadFiles($_FILES["imagem"]);

            if ($uploadResult["type"] === "error") {
                echo json_encode([
                    "message"=> $uploadResult["result"],
                    "type"=> "error"
                ]);

                return;
            }
        
            $this->model->imagem = $uploadResult["result"];
        }

        // if (isset($data["link"])) $this->model->link = $data["link"];

        $this->model->descricao = $data["descricao"];
        
        // $this->model->tipo = $data["tipo"];

        if (!$this->model->save()) {
            echo json_encode([
                "message"=> "Erro ao salvar a imagem!",
                "type"=> "error"
            ]);

            return;
        }

        http_response_code(201);

        echo json_encode([
            "message"=> "Arquivo cadastrado com sucesso!",
            "type"=> "success",
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
        
            $this->model->imagem = $uploadResult["result"];
        }

        // if (isset($data["link"])) $this->model->link = $data["link"];

        if (isset($data["descricao"])) $this->model->descricao = $data["descricao"];
        
        // $this->model->tipo = $data["tipo"];

        if (!$this->model->save()) {
            echo json_encode([
                "message"=> "Erro ao actualizar a imagem!",
                "type"=> "error"
            ]);

            return;
        }

        http_response_code(201);

        echo json_encode([
            "message"=> "Arquivo actualizado com sucesso!",
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
