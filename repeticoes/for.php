<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo '<hr>';

for(; $cont <= 10; $cont++){
    echo "$cont <br>";
}

echo '<hr>';

for(; $cont <= 15; ){
    echo "$cont <br>";
    $cont++;
}

$array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

echo '<hr>';

print_r($array);

echo '<hr>';

for($i = 0; $i < count($array); $i++) {
    echo"{$array[$i]} <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo '<hr>';

for($i=0; $i < count($matrix); $i++) {
    for($j=0; $j < count($matrix[$i]); $j++) {
        echo"{$matrix[$i][$j]}";
    }
    echo'<hr>';
}

$matrix = [
    [2, 4, 6, 8, 10],
    [2, 4, 6]
];

echo '<hr>';

for($i=0; $i < count($matrix); $i++) {
    print_r($matrix[0]);
    for($j=0; $j < count($matrix); $j++) {
        print_r($matrix[1]);
        //echo"{$matrix[$i][$j]}";
    }
    echo'<hr>';
}




