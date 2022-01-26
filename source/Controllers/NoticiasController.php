<?php

namespace Source\Controllers;

use Source\Models\Noticias as Model;

class NoticiasController
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
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

        if (isset($data["titulo"])) $this->model->titulo = mb_convert_case($data["titulo"], MB_CASE_TITLE);

        if (isset($data["date"])) $this->model->date = $data["date"];

        if (isset($data["destaque"])) $this->model->destaque = $data["destaque"];

        if (isset($data["descricao"])) $this->model->descricao = $data["descricao"];

        if (!$this->model->save()) {
            echo json_encode([
                "message"=> "Erro ao actualizar a Notícia!",
                "type"=> "error"
            ]);

            return;
        }

        echo json_encode([
            "message"=> "Notícia actualizada com sucesso!",
            "type"=> "success",
            "imagem" => $this->model->imagem
        ]);

        return;
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
        $this->model->titulo =  mb_convert_case($data["titulo"], MB_CASE_TITLE);
        $this->model->date = $data["date"];
        $this->model->destaque = $data["destaque"];
        $this->model->descricao = $data["descricao"];

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
