<div class="titulo">Desafio Classe Data</div>
<?php

class Data {
    public $dia = 1; 
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() 
    {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$dataPadrao = new Data();
$dataPadrao->dia;
$dataPadrao->mes;
$dataPadrao->ano;
echo $dataPadrao->apresentar(), '<br>';

$dataAtual = new Data();
$dataAtual->dia = 25;
$dataAtual->mes = 5;
$dataAtual->ano = 2021;
echo $dataAtual->apresentar(), '<br>';

