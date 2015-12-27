<?php

	/*
	|--------------------------------------------------------------------------
	| Tipo do cabeçalho da página
	|--------------------------------------------------------------------------
	|
	| Aqui especifico o tipo de interpretação do arquivo.
	|
	*/

	header('Content-Type: text/html; charset=utf-8');


	/*
	|--------------------------------------------------------------------------
	| Página Principal
	|--------------------------------------------------------------------------
	|
	| Definição da página principal da aplicação 'Controlador/Metodo'
	|
	*/

	$pagina = 'Exemplo/index';


	/*
	|--------------------------------------------------------------------------
	| Configurações
	|--------------------------------------------------------------------------
	|
	| Definição da localizações das pastar principais a serem usadas na aplicação.
	|
	*/

	define( 'CONTROLLERS', 'app/controllers/' );
	define( 'VIEWS', 'app/views/' );
	define( 'MODELS', 'app/models/' );
	define( 'HELPERS', 'system/helpers/' );


	/*
	|--------------------------------------------------------------------------
	| Função página principal
	|--------------------------------------------------------------------------
	|
	| Função que define e formata a página principal.Responsável por separar
	| controller e método em variáveis diferentes.
	| Obs: Se o usuário não digitar o método, automaticamente ele execultará
	| o método 'index', caso esse não exista, ocorrerá um erro.
	|
	*/

	function  pagina_principal($pagina)
	{
		$_GET['key'] = (isset($_GET['key']) ? $_GET['key'] . '/': $pagina);

		$key = $_GET['key'];
		$separa = explode('/', $key);

		$controlador = $separa[0];
		$metodo = ($separa[1] == null ? 'index' : $separa[1]);

		$array[] = $controlador;
		$array[] = $metodo;

		return  $array;
	}


	return pagina_principal($pagina);