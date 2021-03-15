<div class="titulo">Argumentos & Retorno</div>

<?php

//não recebe nada, mas retorna um parametro
function obterMensagem()
{
    return 'Seja bem vindo(a)!';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

//recebe um parametro de entrada e retorna outro
function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Renan');
echo '<br>', obterMensagemComNome('Henrique');

function soma($a, $b)
{
    return $a + $b;
}

$x = 34;
$y = 46;
echo '<br>', soma(4, 5);
echo '<br>', soma($x, $y);

//por padrão o PHP passa o valor da variavel por cópia e não por referencia de memória
//neste exemplo o valor original da variavel não é alterado 
function trocaValor($a, $novoValor)
{
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

//passando a referencia e não a cópia do valor
function trocaValorDeVerdade(&$a, $novoValor)
{
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;


?>