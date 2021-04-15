<div class="titulo">Closure & Callable</div>

<?php

/* callable é termo para função que pode ser chamada tanto da forma tradicional
e também de forma anonima atribuida a uma variavel */
$soma1 = function ($a, $b){
    return $a + $b;
};

/* quando definimos uma função anonima internamente o PHP vai jogar essa função dentro de uma classe */

function soma2($a, $b)
{
    return $a + $b;
}

echo $soma1(2,3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo soma2(2,3) . ' ';
echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>';

var_dump($soma1);

function executar1($a, $b, $op, Callable $funcao)
{
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar1(2, 3, '+', $soma1);
executar1(2, 3, '+', soma2);

function executar2($a, $b, $op, Closure $funcao)
{
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

// apenas o primeiro exemplo funciona pois o segundo não é um Closure
echo '<br>';
executar2(100, 100, '+', $soma1);
executar2(2000, 3500, '+', soma2);
?>