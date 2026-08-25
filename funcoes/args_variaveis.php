<div class="titulo">Argumentos Variáveis</div>

<?php

function soma($a, $b) {
    return $a + $b;
}

echo soma(4, 5, 6, 7, 8, 9) . '<br>';
echo soma(7, 8) . '<br>';



function somaCompleta(...$numeros) {
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(4, 5, 6, 7, 8, 9) . '<br>';

$array = [6, 7, 8];
echo '<br>' . somaCompleta(4, 5, 6, 7, 8, 9);



function membros($titular, ...$dependentes) {
    echo "Titular = $titular <br>";
    if($dependentes) {
        foreach ($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';
membros("Ana Silva", "Pedro", "Rafaela", "Amanda");

echo '<br>';
membros("Roberto");