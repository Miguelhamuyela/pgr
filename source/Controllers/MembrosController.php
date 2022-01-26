<?php

namespace Source\Controllers;

use Source\Models\Membros as Model;

class MembrosController
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
                "message" => "Preencha todos os campos!",
                "type" => "warning"
            ]);

            return;
        }

        $uploadResult = uploadFiles($_FILES["imagem"]);

        if ($uploadResult["type"] === "error") {
            echo json_encode([
                "message" => $uploadResult["result"],
                "type" => "error"
            ]);

            return;
        }

        $this->model->fotografia = $uploadResult["result"];
        $this->model->nome = $data["nome"];
        $this->model->sobrenome = $data["sobrenome"];
        $this->model->email = $data["email"];
        $this->model->senha = password_hash(strtolower($data["nome"]) . "." . strtolower($data["sobrenome"]), PASSWORD_DEFAULT);
        $this->model->cargo = $data["cargo"];
        $this->model->categoria = $data["categoria"];
        // $this->model->provincia  = $data["provincia "];

        if (!$this->model->save()) {
            echo json_encode([
                "message" => "Erro ao salvar o Membro!",
                "type" => "error"
            ]);

            return;
        }

        echo json_encode([
            "message" => "Membro cadastrado com sucesso!",
            "type" => "success",
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
                    "message" => $uploadResult["result"],
                    "type" => "error"
                ]);

                return;
            }

            $this->model->fotografia = $uploadResult["result"];
        }

        if (isset($data["nome"])) $this->model->nome = $data["nome"];
        if (isset($data["sobrenome"])) $this->model->sobrenome = $data["sobrenome"];
        if (isset($data["email"])) $this->model->sobrenome = $data["email"];
        if (isset($data["cargo"])) $this->model->cargo = $data["cargo"];
        if (isset($data["categoria"]) && $data["categoria"] !== "") $this->model->categoria = $data["categoria"];
        // $this->model->provincia  = $data["provincia "];

        if (!$this->model->save()) {
            echo json_encode([
                "message" => "Erro ao actualizar o Membro!",
                "type" => "error"
            ]);

            return;
        }

        echo json_encode([
            "message" => "Membro actualizado com sucesso!",
            "type" => "success",
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
