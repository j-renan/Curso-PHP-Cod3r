<div class="titulo">Arrays Constantes</div>

<?php

const FRUTAS = ['Laranja', 'Abacaxi'];
//FRUTAS[0] = 'banana'; não é permitido alterar elemento
//FRUTAS[] = 'banana'; não é permitido adicionar elemento

echo FRUTAS[0];

const CARROS = ["Fiat" => "uno", "ford" => "fiesta"];
// CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizinte', 'Recife')); // outra forma de array constante
//CIDADES[0] = 'Piracicaba'; também não é possivel alterar e atribuir
echo '<br>' .  CIDADES[1];
