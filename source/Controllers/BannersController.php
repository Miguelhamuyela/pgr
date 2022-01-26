<?php

namespace Source\Controllers;

use Source\Models\Banners as Model;

class BannersController
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function create(array $data)
    {
        if (!$_FILES["imagem"]["name"]) {
            echo json_encode([
                "message"=> "Selecione uma imagem para servir como banner!",
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

        if (!$this->model->save()) {
            echo json_encode([
                "message"=> "Erro ao salvar a imagem!",
                "type"=> "error"
            ]);

            return;
        }

        echo json_encode([
            "message"=> "Banner cadastrado com sucesso!",
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
