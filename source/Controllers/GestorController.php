<?php

namespace Source\Controllers;

use Source\Models\Comunicados;
use Source\Models\Reclamacoes;
use Source\Models\Banners;
use Source\Models\Denuncias;
use Source\Models\Documentos;
use Source\Models\Users;
use Source\Models\Noticias;
use Source\Models\Membros;
use Source\Models\Contactos;
use Source\Models\Informacoes;
use Source\Models\Anexos;
use Source\Models\Arquivos;

class GestorController extends Controller
{

    public function __construct($router, $dir = 'gestor')
    {
        parent::__construct($router, $dir);
    }

    public function UserVerify($data)
    {
        $_SESSION["User"] = false; 

        if ($data["email"] == "utente@pnj.gov.ao" && $data["senha"] == "12345") {
            $_SESSION["User"] = true; 
            echo json_encode([
                "next_page"=>"http://localhost/pgr/gestor",
                "message"=>"Login com sucesso",
                "type"=>"success"
            ]);
        }else
            $_SESSION["User"] = false;
    }

    
    public function LogOut($data)
    {
        $_SESSION["User"] = false; 

        session_destroy();
        header("location:'/gestor/login"); 

    }

    public function index()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('index', [
            "banners" => (new Banners)->find()->count(),
            "denuncias" => (new Denuncias)->find()->count(),
            "reclamacoes" => (new Reclamacoes)->find()->count(),
            "usuarios" => (new Users)->find()->count()
        ]);
    }

    public function BannersPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('banners',[
            "banners" => (new Banners())
                -> find()
                -> fetch(true),
            "count" => (new Banners())
                -> find()
                -> count()
        ]);
    }

    public function InformacoesPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('info', [
            "informacoes" => (new Informacoes)
                ->find()
                ->fetch(true),
            "anexos" => (new Anexos)
                ->find()
                ->fetch(true)
        ]);
    }

    public function GestorNoticiasPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('noticias', [
            "noticias" => (new Noticias)->find()->order("date DESC")->fetch(true)
        ]);
    }

    public function GestorMembrosPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('membros', [
            "membros" => (new Membros)->find()->fetch(true)
        ]);
    }

    public function GaleriaPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('galeria', [
            "arquivos" => (new Arquivos)->find()->fetch(true)
        ]);
    }

    public function ArquivosPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('arquivos');
    }
    
    public function GestorDenunciasPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('denuncias',[
            "denuncias" => (new Denuncias())
                -> find()
                -> fetch(true),
            "count" => (new Denuncias())
                -> find()
                -> count(),
            "docs" => (new Documentos())
                -> find()
                -> fetch(true)
        ]);
    }

    public function GestorReclamacoesPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('reclamacoes',[
            "reclamacoes" => (new Reclamacoes())
                -> find()
                -> fetch(true),
            "count" => (new Reclamacoes())
                -> find()
                -> count()
        ]);
    }

    public function GestorComunicadosPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('comunicados',[
            "comunicados"=>(new Comunicados())
                -> find()
                -> fetch(true),
            "anuncio" => (new Arquivos)->find("tipo = 'anuncio'")->fetch()
        ]);
    }

    public function ContactosPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('contactos', [
            "contactos" => (new Contactos)
                ->find()
                ->fetch(true)
        ]);
    }

    public function UsuariosPage()
    {
        if (!verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor/login");
        }

        echo $this->view->render('usuarios',[
            "usuarios"=> (new Users())
                -> find()
                -> fetch(true),
            "count"=> (new Users())
                -> find()
                -> count()
        ]);
    }

    public function login()
    {
        if (verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor");
        }
        
        echo $this->view->render('login');
    }

    public function login_membro()
    {
        if (verificarAutenticacoa()) {
            header("Location: " . URL_BASE . "/gestor");
        }
        
        echo $this->view->render('login_membro');
    }
}