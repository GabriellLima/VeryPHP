
<?php

	/*
	|--------------------------------------------------------------------------
	| Registro da Auto carregadora
	|--------------------------------------------------------------------------
	|
	| O PHP fornece um conveniente gerador automático de classe para nossa
	| aplicação. Nós apenas precisamos utilizá-lo! Vamos precisar dele no
	| script para não nos preocupar com o carregamento de classes "manualmente".
	| Sente-se e relaxar.
	|
	*/

	function __autoload( $classe )
	{
	    if( file_exists(MODELS . $classe . '.php') )
	    {
	        require_once(MODELS . $classe . '.php');
	    }
	    else if( file_exists( HELPERS . $classe . '.php') )
	    {
	        require_once( HELPERS . $classe . '.php');
	    }
	    else
	    {
	        die("Model ou Helper não encontrado");
	    }
	}