<?php


	/*
	|--------------------------------------------------------------------------
	| Configuração
	|--------------------------------------------------------------------------
	|
	| Aquivo de configuração da aplicação. Responsável por definir Tipo do
	| cabeçalho dos arquivos, Localização das pastas,e página principal da aplicação
	| dele no script para não nos preocupar com o carregamento de quaisquer
	| classes "manualmente". Sente-se e relaxar.
	|
	*/

	$array = require __DIR__.'/config/config.php';


	/*
	|--------------------------------------------------------------------------
	| Registro da Auto carregadora
	|--------------------------------------------------------------------------
	|
	| O PHP fornece um conveniente gerador automatico de classe para
	| nossa aplicação. Nós apenas precisamos utilizá-lo! Nós vamos precisar
	| dele no script para não nos preocupar com o carregamento de quaisquer
	| classes "manualmente". Sente-se e relaxar.
	|
	*/

	require __DIR__.'/config/autoload.php';


	require_once('system/core/Controller.php');
	require_once('system/core/Model.php');
	require_once('app/controllers/' . $array[0] . 'Controller.php');

	$app = new $array[0]();
	$app->$array[1]();