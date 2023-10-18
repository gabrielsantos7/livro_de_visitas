<?php

/* ----------------------------------------------------------------
Controller principal que chama as páginas de acordo com a rota
---------------------------------------------------------------- */

namespace Ifba\Visitantes\controller;

use Ifba\Visitantes\model\DAO\VisitorDAO;
use Ifba\Visitantes\model\entities\Visitor;

class VisitorController{

    public function index()
    {
        require "./app/view/home.php";
    }

    public function listVisitors()
    {
        //require "./app/model/DAO/VisitorDAO.php";
        $dao = new VisitorDAO;
        $visitors = $dao->findAll();
        
        require "util.php";
        createCSV($visitors);
        // $data = [
        //     'titulo' => TITLE,
        //     'visitors' => $visitors
        // ];
        require "./app/view/list_visitors.php";
        echo '<h3>A planilha com os registros foi gerada!</h3>';
        //view("listarVisitas", $data);
    }
    
    public function save()
    {
        if(empty($_POST['name']) || empty($_POST['rating'])) {
            header('Location: cadastrar');
            exit;
        }
        $visitor = new Visitor();
        $visitor->setName($_POST['name'] ?? '');
        $visitor->setRating($_POST['rating'] ?? '');
        $visitor->setDate();

        $dao = new \Ifba\Visitantes\model\DAO\VisitorDAO;

        if($dao->insert($visitor)) {
            $msgH1 = "Sucesso!";
            $msgP = "Seu formulário foi enviado com sucesso. Agradecemos sua participação!";
        } else {
            $msgH1 = "Ocorreu um erro ao enviar o formulário";
            $msgP = "Ocorreu um erro ao enviar o formulário. Entre em contato com os administradores do sistema.";
        }

        require "./app/view/send.php";
    }

    public function notFound()
    {
        require "./app/view/not_found.php";
    }
}