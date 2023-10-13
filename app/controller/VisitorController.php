<?php

/* ----------------------------------------------------------------
Controller principal que chama as páginas de acordo com a rota
---------------------------------------------------------------- */

namespace Ifba\Visitantes\controller;

use Ifba\visitantes\model\DAO\VisitorDAO;

class VisitorController{

    public function index()
    {
        require "./app/view/home.php";
    }

    public function listVisitors()
    {
        $dao = new VisitorDAO;
        $visitors = $dao->findAll();

        $data = [
            'titulo' => TITLE,
            'visitors' => $visitors
        ];
        // require "./app/view/list_visitors.php";
        // view("listarVisitas", $data);
    }
    public function save()
    {
        $visitor = new \Ifba\Visitantes\model\entities\Visitor();
        $visitor->setName($_POST['name'] ?? '');
        $visitor->setRating($_POST['rating'] ?? '');
        $visitor->setDate();

        $dao = new \Ifba\Visitantes\model\DAO\VisitorDAO;

        if($dao->insert($visitor)) {
            $msgH1 = "Formulário enviado com sucesso";
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