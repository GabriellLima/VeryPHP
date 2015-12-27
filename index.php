<?php

	/**
	 * VeryPHP - Um Framework Pessoal para Crianças.
	 *
	 * @package  VeryPHP
	 * @author   Robert San  <robetsanseries@gmail.com>
	 */


	/*
	|--------------------------------------------------------------------------
	| Configuração
	|--------------------------------------------------------------------------
	|
	| Aquivo de configuração da aplicação. Responsável por definir Tipo do
	| cabeçalho dos arquivos, Localização das pastas,e página principal da
	| aplicação.
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


	/*
	|--------------------------------------------------------------------------
	| Inclusão das classes padrões
	|--------------------------------------------------------------------------
	|
	| Incluir as páginas padrões do framework. Caso dê algum erro, o script
	| retorna um erro fatal e aborta a execução do script.
	|
	*/

	require_once('system/core/Controller.php');

	require_once('system/core/Model.php');

	require_once('app/controllers/' . $array[0] . 'Controller.php');


	/*
	| ------------------------------------------------- -------------------------
	| Execute o aplicativo
	| ------------------------------------------------- -------------------------
	|
	| Responsavel por instânciar os objetos que chama o controller e método
	| especificado pela url enviando a resposta de volta para browser do cliente.
	|
	*/

	$app = new $array[0]();
	$app->$array[1]();
