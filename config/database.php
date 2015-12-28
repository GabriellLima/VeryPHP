<?php

return [

	/*
     | ------------------------------------------------- -------------------------
     | Nome da conexão banco do dados padrão
     | ------------------------------------------------- -------------------------
     |
     | Aqui você pode especificar qual das conexões de banco de dados abaixo você deseja
     | para usar como sua conexão padrão para todos os trabalhos de banco de dados.
     |
     */

    'default' => 'mysql',

    /*
     | ------------------------------------------------- -------------------------
     | Conexões de banco de dados
     | ------------------------------------------------- -------------------------
     |
     | Aqui está cada um a configuração conexões banco de dados para sua aplicação.
     |
     | Todo o trabalho de banco de dados é feito através de PDO por isso verifique
	 | se você tem os driver para o banco de dados específico da sua escolha
	 | instalado em sua máquina antes de iniciar o desenvolvimento.
     |
     */

    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => 'database.sqlite',
            'prefix'   => '',
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'forge',
            'username'  => 'forge',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => 'localhost',
            'database' => 'forge',
            'username' => 'forge',
            'password' => '',
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => 'DB_HOST', 'localhost',
            'database' => 'DB_DATABASE', 'forge',
            'username' => 'DB_USERNAME', 'forge',
            'password' => 'DB_PASSWORD', '',
            'charset'  => 'utf8',
            'prefix'   => '',
        ],
    ],

];
