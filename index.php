<?php

//definir qual vai ser a pagina principal da aplicação 'controlador/metodo'
$_GET['key'] = (isset($_GET['key']) ? $_GET['key'] . '/': 'Exemplo/index');
$key = $_GET['key'];
$separa = explode('/', $key);
$controlador = $separa[0];
$metodo = ($separa[1] == null ? 'index' : $separa[1]);


//Função autoload
function __autoload( $classe )
{
	require_once('app/models/' . $classe . '.php');
}

require_once('system/core/Controller.php');
require_once('system/core/Model.php');
require_once('app/controllers/' . $controlador . 'Controller.php');

$app = new $controlador();
$app->$metodo();