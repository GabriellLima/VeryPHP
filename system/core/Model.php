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
 * Classe de Modelo da Aplicação
 *
 * Este objeto classe é a classe Modelo da nossa aplicação.
 *
 * @package		VeryPHP
 * @subpackage	System
 * @category	core
 * @author		Robert San
 */
class Model
{
	/**
	 * Variável que recebe a instância da conexão com o baco de dados.
	 * @access private
	 */
	private static $db;
	public $tabela;


	/*
     * Método construtor da Classe.
     */
    public function __construct(){}

    /*
     * Método estático responsável por criar a conexão com o banco de dados.
     * se conexão já existir ele retorna a conexão existente.
     */
    public static function  getInstance()
    {
    	if(!isset(self::$db)){

			try
			{
				self::$db = new \PDO('mysql:host=' . 'localhost' . ';dbname=' . 'teste','root', '1234');
				self::$db->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				self::$db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
			}
			catch (PDOException $e)
			{
				die("Erro na Conexão: " . $e->getMessage());
			}

		}

		return self::$db;

    }

    /**
     * Método estático responsável por chamar o método getInstance e executar o SQL.
     * @param String $sql
     * @return void
     */
    public static function query($sql)
	{
		return self::getInstance()->query($sql);
	}

	/**
     * Método responsável pela inserção de dados em uma tabela.
     * @param String $tabela
     * @param Array $dados
     */
	public function create( Array $dados )
	{
		//Separar os campos e valores em arrays distintos.
		foreach ($dados as $key => $value) {
			$campos[] = $key;
			$valores[] = $value;
		}

		//formatar dados para construção do sql.
		$campos = implode(', ', $campos);
		$valores = "'" . implode("' , '", $valores) . "'";

		$sql = "INSERT INTO `$this->tabela` ( $campos ) VALUES ( $valores )";
		self::query($sql);
	}

	/**
     * Método responsável por retornar todos os dados de uma tabela.
     * @param String $tabela
     * @return Array
     */
	public function all()
	{
		$sql = "SELECT * FROM `$this->tabela`";
		$resultado = self::query($sql);

		return $resultado->fetchAll();
	}

	/**
     * Método responsável por retornar dados específico em uma tabela.
     * @param String $tabela
     * @param Array $where
     * @return Array
     */
	public function find( $where )
	{
		$sql = "SELECT * FROM `$this->tabela` WHERE $where";
		$resultado = self::query($sql);

		return $resultado->fetchAll();

	}

	/**
     * Método responsável pela alteração de dados em uma tabela.
     * @param String $tabela
     * @param Array $dados
     * @param Array $where
     */
	public function update( Array $dados, $where )
	{
		//Criar array com os campos e os novos valores a serem implementados no sql.
		foreach ($dados as $key => $value) {
			$campos[] = "$key = '$value'";
		}

		//formatar dados para construção do sql.
		$campos = implode(", ", $campos);

		$sql = "UPDATE `$this->tabela` SET $campos WHERE $where";
		self::query($sql);
	}


	/**
     * Método responsável pela exclusão de dados específicos em uma tabela.
     * @param String $tabela
     * @param Array $dados
     * @param Array $where
     */
	public function delete( $where )
	{
		$sql = "DELETE FROM `$this->tabela` WHERE $where";
       	self::query($sql);
    }

}