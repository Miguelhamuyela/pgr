<?php

namespace Source\Controllers;

use Source\Models\SectoresActividades;
use Source\Models\Banners;
use Source\Models\Noticias;
use Source\Models\Comunicados;
use Source\Models\Arquivos;
use Source\Models\Membros;
use Source\Models\Informacoes;
use Source\Models\Anexos;
class Web extends Controller
{

    public function __construct($router, $dir = 'web')
    {
        parent::__construct($router, $dir);
    }

    public function index()
    {
                $thumb = new \CoffeeCode\Cropper\Cropper("Views/uploads/cache" , 75, 5, true);

        echo $this->view->render('index',[
            "banners" => (new Banners)->find()->fetch(true),
            "noticias" => (new Noticias)->find()->order("date DESC")->fetch(true),
            "arquivos" => (new Arquivos)->find()->fetch(true),
            "informacoe" => (new Informacoes)->find()->fetch(true),
            "membros" => (new Membros)->find()->fetch(true),
            "thumb" => $thumb
        ]);
    }
 public function SobrePage()
    {
        echo $this->view->render('sobre',[
            "informacoe" => (new informacoes)->find()->fetch(true)
        ]);
        
    }

    public function MembrosPage()
    {
        echo $this->view->render('quem',[
            "membros" => (new Membros)->find()->fetch(true)
        ]);
       

    }

    public function LegislacoesPage()
    {
        echo $this->view->render('legislacoes',[

        "informacoe" => (new informacoes)->find()->fetch(true), 
        "anexos" => (new Anexos)->find()->fetch(true)
        ]);
    }


    public function comunicados()
    {
        echo $this->view->render('comunicados',[

        "informacoe" => (new informacoes)->find()->fetch(true),
        "anexos" => (new Anexos)->find()->fetch(true)
        ]);
    }

    public function publicacoes()
    {
        echo $this->view->render('publicacoes',[

        "informacoe" => (new informacoes)->find()->fetch(true),
        "anexos" => (new Anexos)->find()->fetch(true)
        ]);
    }
    
    public function r_anuais()
    {
        echo $this->view->render('r_anuais',[

        "informacoe" => (new informacoes)->find()->fetch(true),
        "anexos" => (new Anexos)->find()->fetch(true)
        ]);
    }
    
    
        
    public function outros_doc()
    {
        echo $this->view->render('outros_doc',[

        "informacoe" => (new informacoes)->find()->fetch(true),
        "anexos" => (new Anexos)->find()->fetch(true)
        ]);
    }

    public function DenunciasPage()
    {
        echo $this->view->render('denuncias',[
            "sectoresActividades"=>(new SectoresActividades())->find()->fetch(true)
        ]);
    }

    public function ReclamacoesPage()
    {
        echo $this->view->render('reclamacoes');
    }
    
     public function pesquisar_noticias($data)
    {
       
        
        $search = $data["pesquisar_noticias"];
        $users = (new Noticias())->find("titulo LIKE '%{$search}%'")->fetch(true);
    
         if (!$users)
         {
    
            echo json_encode([
                "message"=> "Utilizador cadastrado com sucesso!",
                "type"=> "success",
               
            ]);
           
        }
      


    echo $this->view->render("noticias", [
        "app" => "users/home",
         
      "search" => $search,
        "noticias" => $users,
        "comunicados" => (new Comunicados)->find()->fetch(true),
        
        "anuncio" => (new Arquivos)->find("tipo = 'anuncio'")->fetch()
     
    ]);

    
    }




    public function NoticiasPage()
    {
        echo $this->view->render('noticias',[
            "noticias" => (new Noticias)->find()->order("date DESC")->fetch(true),
            "comunicados" => (new Comunicados)->find()->fetch(true),
            "anuncio" => (new Arquivos)->find("tipo = 'anuncio'")->fetch()
        ]);
    }

    public function DetalhesNoticiasPage($data)
    {
        $noticia = (new Noticias())->findById($data['id']);

        echo $this->view->render('detalhesNoticia', [
            "noticia" => $noticia,
            "comunicados" => (new Comunicados)->find()->fetch(true),
            "noticias" => (new Noticias)->find()->fetch(true),
        ]);
    }

    public function DNPCCPage()
    {
        echo $this->view->render('dnpcc');
    }

    public function ContactPage()
    {
        echo $this->view->render('contact');
    }

    public function DNIAPPage()
    {
        echo $this->view->render('dniap');
    }
    

    public function SENRAPage()
    {
        echo $this->view->render('senra');
    }

    public function PGRSICPage()
    {
        echo $this->view->render('pgrsic');
    }
}
