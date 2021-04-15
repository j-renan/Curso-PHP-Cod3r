<div class="titulo">Retornando Função</div>

<?php

function soma($a)
{
    /* palavra reservada "use" serve para usar o parametro da função 
    externa na função interna */
    return function($b) use ($a){
        return $a + $b;
    };
}

echo soma(13)(3);

$doisMais = soma(2);
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);