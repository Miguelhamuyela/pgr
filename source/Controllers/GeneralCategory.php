<?php

namespace Source\Controllers;
use Source\Models\GeneralCategory as Model;
class GeneralCategory{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function read()
    {
        $rowsGeneralCategory = $this->model->find()->fetch(true);
        
        if($rowsGeneralCategory)
            echo \json_encode(jsonFormat($rowsGeneralCategory));     
    }

    
}