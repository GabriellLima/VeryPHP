
<?php

	/*
	|--------------------------------------------------------------------------
	| Registro da Auto carregadora
	|--------------------------------------------------------------------------
	|
	| O PHP fornece um conveniente gerador automatico de classe para
	| nossa aplicação. Nós apenas precisamos utilizá-lo! Nós vamos precisar
	| dele no script para não nos preocupar com o carregamento de quaisquer
	| nossas aulas "manualmente". Sente-se e relaxar.
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


	/*
	|--------------------------------------------------------------------------
	| Função Autoload
	|--------------------------------------------------------------------------
	|
	| No PHP quando se chama o método mágico __autoload, ele faz uso do nome do
	| namespace para lê os caminhos da nossa aplicação e encontrar cada classe.
	| Como estamos usando por convenção nome de pastas minusculas e a primeira
	| letra de nossas namespace são maiusculas foi necessário  criar a função
	| formataAutoload para transforma a primeira letra em minusculas como nas
	| pastas.
	|
	*/

	/*
	 *@return string
	 */
	function formataAutoload($nome)
	{
		$array = str_split($nome); 	// Transforma o nome em Array
		$contadora = count($array) - 1; // Tamanho do Array
		$y = 0;
		$qtbarra = 0; 	// Quantidade de barras

		// Responsávl por transformar primeira letra depois "/" em minuscula
		// Exceção para a ultima barra, pois tem que permanecer como mesmo nome da class
		while($contadora >= $y)
		{
			// Conta quantas barras tem
			if ($array[$contadora] == '/'){
				$qtbarra  = $qtbarra + 1;
			}


			// Transformar primeira letra depois d ecada barra em minuscula
			if($qtbarra > 1){
				$t = $contadora + 1 ;
				$letra = $array[$t];
				$array[$t] = strtolower($letra);
			}

			// Transformar primeira letra em minuscula
			if($qtbarra >= 1){
				$nome = implode("", $array);
				$primeiraLetra = strtolower(substr($nome, 0, 1));
				$restoPalavra = substr($nome, 1);
				$nome = $primeiraLetra. $restoPalavra;
			}

			$contadora--;
		}

		return $nome;
	}