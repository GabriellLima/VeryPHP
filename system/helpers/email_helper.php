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
 * @package	    VeryPHP
 * @subpackage	Helpers
 * @category	Helpers
 * @author	    Robert San
 * @copyright   Copyright (c) 2015, Robert San
 * @since	    Version Beta 0.0.2
 */

// ------------------------------------------------------------------------

if ( ! function_exists('valida_email'))
{
	/**
	 * Validação de Email
	 *
	 * @param	string	$email
	 * @return	bool
	 */
	function valida_email($email)
	{
		return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('enviar_email'))
{
	/**
	 * Enviar Email
	 *
	 * @param	string	$recipient
	 * @param	string	$assunto
	 * @param	string	$mesagem
	 * @return	bool
	 */
	function send_email($recipient, $assunto, $messagem)
	{
		return mail($recipient, $assunto, $messagem);
	}
}
