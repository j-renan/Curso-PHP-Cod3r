<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Jaspion", "Jiraya", "Changhiman", "Kaman Raider"];

$randKeys = array_rand($nomes);

echo "<div center><h1>$nomes[$randKeys]</h1></div>";

print_r($nomes[$randKeys]);

?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>