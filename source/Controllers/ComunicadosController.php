<?php

namespace Source\Controllers;

use Source\Models\Comunicados as Model;

class ComunicadosController {
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function create(array $data)
    {

        $this->model->descricao = $data["descricao"];

        if (!$this->model->save()) {
            echo json_encode([
                "message"=> "Erro ao salvar o comunicado!",
                "type"=> "error"
            ]);

            return;
        }

        echo json_encode([
            "message"=> "Comunicado cadastrada com sucesso!",
            "type"=> "success",
            "imagem" => $this->model->imagem
        ]);

        return;
    }

    public function update(array $data)
    {
        $this->model = (new Model())->findById($data['id']);

        if (isset($data["descricao"])) $this->model->descricao = $data["descricao"];

        if (!$this->model->save()) {
            echo json_encode([
                "message"=> "Erro ao actualizar o comunicado!",
                "type"=> "error"
            ]);

            return;
        }

        echo json_encode([
            "message"=> "Comunicado actualizado com sucesso!",
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