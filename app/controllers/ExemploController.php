<?php

/**
 * Classe ExemploController
 *
 * Esta classe é apenas de exemplo.
 * Toda classe Controller criada tem que extender a classe Controller por padrão.
 *
 * @package		VeryPHP
 * @subpackage	app
 * @category	controllers
 * @author		Robert San
 */

class Exemplo extends Controller
{

	public function __construct(){}

	public function index()
	{
		return  $this->view('Exemplo');
	}

}