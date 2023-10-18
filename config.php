<?php
/* ----------------------------------------------------------------
Arquivo de configuração do PHP. Adicionar constantes aqui
---------------------------------------------------------------- */

// Mudar a URL para o nome da pasta que foi criada
define('BASEPATH', 'http://localhost/livro_de_visitas');
define('VIEW', './app/view');
define('TITLE', 'Livro de Visitas - SECITEC');

// define('BD', [
//   'server' => '200.128.9.179',
//   'port' => '3306',
//   'database' => 'visitors',
//   'user' => 'remoto',
//   'password' => 'remoto'
// ]);

define('BD', [
  'server' => 'localhost',
  'port' => '3306',
  'database' => 'visitors',
  'user' => 'root',
  'password' => ''
]);