<?php

namespace Source\Controllers;

use Source\Models\Informacoes as Model;
use Source\Models\Anexos;

class InformacoesController
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function update(array $data)
    {
        $this->model = (new Model())->findById($data['id']);
        
        if (isset($data["titulo"])) $this->model->titulo = $data["titulo"];

        if (isset($data["resumo"])) $this->model->resumo = $data["resumo"];

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
        
        if (isset($data["descricao"])) $this->model->descricao = $data["descricao"];

        if (isset($_FILES["anexo"]) && $_FILES["anexo"]["name"]) {
            $uploadResult = uploadFiles($_FILES["anexo"]);

            if ($uploadResult["type"] === "error") {
                echo json_encode([
                    "message"=> $uploadResult["result"],
                    "type"=> "error"
                ]);

                return;
            }

            $anexo = (new Anexos())->find("id_info = {$this->model->id}")->fetch();
        
            $anexo->src = $anexo->titulo = $uploadResult["result"];

            if (!$anexo->save()) {
                echo json_encode([
                    "message"=> "Erro ao salvar o(s) anexo(s)!",
                    "type"=> "error"
                ]);
    
                return;
            }
        }


        if (isset($_FILES["anexos"])) {
            $uploadResult = uploadMultipleFiles($_FILES["anexos"]);

            if ($uploadResult["type"] === "error") {
                echo json_encode([
                    "message"=> $uploadResult["result"],
                    "type"=> "error"
                ]);

                return;
            }

            foreach ($uploadResult["result"] as $file) {
                $anexo = new Anexos();
        
                $anexo->src = $anexo->titulo = $file;

                $anexo->id_info = $this->model->id;

                if (!$anexo->save()) {
                    echo json_encode([
                        "message"=> "Erro ao salvar o(s) anexo(s)!",
                        "type"=> "error"
                    ]);
        
                    return;
                }
            }
        }

        if (!$this->model->save()) {
            echo json_encode([
                "message"=> "Erro ao actualizar a informação!",
                "type"=> "error"
            ]);

            return;
        }

        echo json_encode([
            "message"=> "Informação actualizada com sucesso!",
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
