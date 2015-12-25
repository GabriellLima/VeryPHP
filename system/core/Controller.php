<?php

/**
 * VeryPHP
 *
 * Aplicação de código aberto para PHP
 *
 * O SOFTWARE É FORNECIDO "COMO ESTÁ", SEM QUALQUER TIPO DE GARANTIA, EXPRESSA OU
 * IMPLÍCITAS, INCLUINDO, SEM LIMITAÇÃO. EM NENHUMA HIPÓTESE A AUTORES OU
 * DETENTORES DE DIREITOS AUTORAIS SERÁ RESPONSÁVEL POR QUALQUER RECLAMAÇÃO,
 * DANOS OU OUTRAS RESPONSABILIDADE, SEJA EM UMA AÇÃO DE CONTRATO, DELITO OU OUTRA,
 * DECORRENTE DE, DE OU EM CONEXÃO COM O SOFTWARE OU O USO OU OUTRA APLICAÇÃO.
 *
 * @package	   VeryPHP
 * @author	   Robert San
 * @copyright  Copyright (c) 2015, Robert San
  * @since	   Version Beta 0.0.2
 */


/**
 * Classe Controladora da Aplicação
 *
 * Este objeto classe é uma super classe que cada biblioteca em
 * VeryPHP será atribuída.
 *
 * @package		VeryPHP
 * @subpackage	System
 * @category	core
 * @author		Robert San
 */
class Controller
{
	/*
     * Método construtor da Classe.
     */
	function __construct(){}

	/**
     * Método responsável por retornar uma View.
     * @param String $view
     * @return require_once
     */
	public function view( $view )
	{
		return require_once('app/views/'. $view . '.php');
	}
}