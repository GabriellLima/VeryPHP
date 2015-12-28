<?php

class VeryPHP{

    private $url;
    private $explode;

    public $controller;
    public $action;
    public $params;

    public function __construct()
    {
        $this->setUrl();
        $this->setExplode();
        $this->setController();
        $this->setAction();
        $this->setParams();
    }

    private function setUrl()
    {
        $_GET['url'] = (isset($_GET['url']) ? $_GET['url'] . '/': 'Exemplo/index');
        $this->url = $_GET['url'];
    }

    private function setExplode()
    {
        $this->explode = explode('/', $this->url);

        //Responsável por excluir parametros nulos
        foreach($this->explode as  $key => $value)
        {
            if($value == null){
                unset($this->explode[$key]);
            }
        }
    }


    private function setController()
    {
        $this->controller = $this->explode[0];
    }

    private function setAction()
    {
        $action = (!isset($this->explode[1]) || $this->explode[1] == null ? 'index' : $this->explode[1]);
        $this->action = $action;
    }

    private function setParams()
    {
        unset($this->explode[0], $this->explode[1]);

        $x = 0;
        if(!empty($this->explode))
        {
            foreach($this->explode as $valor)
            {
                if($x  % 2 == 0)
                {
                    $key[]  = $valor;
                }
                else
                {
                    $value[] = $valor;
                }

                $x++;
            }
        }
        else
        {
            $key = array();
            $value = array();
        }

        print_r($value);


    }
}