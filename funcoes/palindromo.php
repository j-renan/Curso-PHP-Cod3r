<div class="titulo">Desafio Palindromo</div>

<?php
function palindromo($palavra)
{
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não';
        }
    }
    return 'Sim';

}

echo palindromo('ovo') . '<br>';
echo palindromo('mula') . '<br>';

function palindromoSimples($palavra)
{
    //return $palavra === strrev($palavra) ? 'Sim' : 'Não';
    if($palavra !== strrev($palavra)){
        return 'Não';
    }
    return 'Sim';
}

echo palindromoSimples('bolo') . '<br>';
echo palindromoSimples('bolo') . '<br>';



?>