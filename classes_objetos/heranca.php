<div class="titulo">Herança</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) 
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa criada! <br>';
    }

    function __destruct()
    {
        echo 'Pessoa diz: Tchau!!';
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

// Classe Usuario herdando de Pessoa
Class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        /*utilizando os comportamentos da super classe Pessoa:
        parent::__costruct($nome, $idade);*/
        $this->login = $login;
        echo 'Usuário criado! <br>';
    }

    function __destruct()
    {
        echo 'Usuário diz: Tchau!!';
        /* Também é possivel utilizar o destruct da super classe Pessoa:
        parent::__destruct() */
    }

    public function apresentar()
    {
        //sobrescrevendo comportamentos
        echo "@{$this->login}: {$this->nome}, {$this->idade} anos<br>";
    }

    /* public function apresentar()
    {
        //sobrescrevendo e mantendo comportamento de pessoa e
        //acrescentando uma nova informação
        echo "@{$this->login}: ";
        parent::apresentar();
    } */

    /* Caso não sobrescreva nenhum comportamento, usuário ira utilizar os comportamentos
    herdados da super classe Pessoa definidos em apresentar() */
}

$usuario = new Usuario('João Renan', 35, 'j-renan');
$usuario->apresentar();
unset($usuario);

