<div class="titulo">Argumentos Váriaveis</div>

<?php

//função com argumentos padrões
function soma($a, $b)
{
    return $a + $b;
}

echo soma(14, 15) . '<br>';
echo soma(5, 6, 9) . '<br>'; //parametro excedente é ignorado

//função com parametros váriaveis
//usa-se a notação de (...) varArgs
//todos os argumentos passados serão colocados em um array 
function somaCompleta(...$numeros)
{
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(2, 6, 7, 5, 3, 9);

//passando um array como parametro
$array = [6, 8, 13];
echo '<br>' . somaCompleta(...$array);

//passando parametros normais com parametros variaveis
//os parametros variaveis devem ficar sempre por ultimo
function membros($titular, ...$dependentes)
{
    echo "Titular: $titular <br>";
    if($dependentes) {
        foreach($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';
membros("Ana Silva", "Pdero", "Rafaela", "Amanda");

echo '<br>';
membros("Roberto");
?>