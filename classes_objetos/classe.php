<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
    //atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    //metodos
    public function apresentar()
    {
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}

//Objetos
$cliente1 = new Cliente();
$cliente1->nome = "Renan";
$cliente1->idade = 35;
echo $cliente1->apresentar(), '<br>';

$cliente2 = new Cliente;
$cliente2->nome = "Henrique";
$cliente2->idade = 6;
echo $cliente2->apresentar(), '<br>';