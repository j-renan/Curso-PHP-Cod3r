<div class="titulo">Funções Anonimas</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

//passando uma função como parametro
// 1º e 2º parametros são os valores
// 3º é uma string para imprimir o operador
// 4º é a função que sera passada
function executar($a, $b, $op, $funcao)
{
    $resultado = $funcao($a, $b) ?? 'Nada'; // passando nada como padrão
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);

$multiplicacao = function($a, $b){
    return $a * $b;
};

executar(2, 3, '*', $multiplicacao);

//exemplo passando uma função comum como parametro
function divisao($a, $b)
{
    return $a / $b;
}

executar(2, 3, '/', divisao);

?>