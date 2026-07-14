<div class="titulo">Desafio Break / Continue</div>

<?php

//Desafio: Imprima apenas os valores do array que contém indice par
//Requisito: Resolver com for e foreach
//Valores esperados: AAA, CCC, EEE

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF",
];

for ($i = 0; $i < count($array); $i++) {
    if($i % 2 === 1) continue;
    echo "{$array[$i]} <br>";
}

echo "<hr>";

foreach ($array as $chave => $valor) {
    if($chave % 2 !== 0 ) continue;
    echo "$valor ";
}