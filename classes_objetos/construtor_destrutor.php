<div class="titulo">Construtor/Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "Morreuuu! <br>";
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoaA = new Pessoa('Jumenta', 34);
$pessoaA->apresentar();

/* $pessoa = new Pessoa(); Problema, não funciona pois é possível criar uma 
pesssoa sem passar os paramentros*/

/* $pessoa2 = new Pessoa();
$pessoa2->nome = 'Cavalo Velho';
$pessoa2->apresentar();
Não funciona pois os parametros devem ser passados na chamada da função*/


//unset() metodo responsável por chamar o destrutor
unset($pessoaA);


//Exemplo2
$pessoaB = new Pessoa('Cavalo Velho', 80);
$pessoaB->apresentar();
$pessoaB = null;

// null também serve para chamar o destrutor