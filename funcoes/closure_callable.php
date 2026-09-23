<div class="titulo">Closure e Callable</div>

<?php

$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2 ($a, $b) {
    return $a + $b;
};

echo $soma1(2,3) . '<br>';
echo (is_callable($soma1) ? 'Sim': 'Não') . '<br>';

echo soma2(2,3) . '<br>';
echo (is_callable(soma2) ? 'Sim': 'Não') . '<br>';

var_dump($soma1);

function executar1($a, $b, $oper, Callable $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $oper $b = $resultado<br>";
}

echo '<br>';
executar1(2, 3, '+', $soma1);
executar1(2, 3, '+', soma2);

echo "__________________<br>";

function executar2($a, $b, $oper, Closure $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $oper $b = $resultado<br>";
}

echo '<br>';
executar2(100, 100, '+', $soma1);
executar2(200, 200, '+', soma2);