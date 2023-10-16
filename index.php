<?php

/* ----------------------------------------------------------------
Arquivo principal do PHP. Redireciona as rotas para o Controller
---------------------------------------------------------------- */

require "./vendor/autoload.php";
require "./config.php";

date_default_timezone_set('America/Bahia');

//echo date('d/m/Y H:i:s');

$url = $_GET['url'] ?? "/";

use \Ifba\Visitantes\controller\VisitorController;
$ctr = new VisitorController();

switch($url){
    // A URL base é /cadastrar. Onde é exibido o formulário
    case "cadastrar":
        $ctr->index();
    break;

    // Caso seja /, redireciona para /cadastro
    // Tentar usar a constante BASEPATH
    case "/":
        header('Location: /livro_de_visitas/cadastrar');
    break;

    case "visitantes":
        $ctr->listVisitors();
    break;

    case "salvar":
        $ctr->save();
    break;

    // Página não encontrada
    default:
        $ctr->notFound();
}



#MVC -> MODEL VIEW CONTROLLER -> Padrão de Projeto muito utilizado para o desenvolvimento web. Este padrão visa que cada classe tem uma responsabilidade específica na aplicação. E estas classes estão dividas em camadas que tem suas responsabilidades.
#MODEL -> Responsavel pelas regras de negocio da aplicação e o acesso e manipulação dos dados
#VIEW -> Responsável pela visualização das informações. Nesta camada que desenvolvemos o HTML, CSS...
#CONTROLLER -> Reponsável pelo Meio de campo, trabalhando as requisições do usuário e as respostas a serem entregues. Faz intermediação entre o model e a view