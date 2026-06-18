<div class="titulo">Básicas</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);

unset($soma);
echo '<br>';
var_dump($soma);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

//nomes de variáveis
$var = 'válida';
$var2 = 'válida';
$VAR2 = 'válida';
$_var_4 = 'válida';
$vâr4 = 'válida'; //evitar acentos
//$6var = 'inválida';
//$%7var = 'inválida';
//$8var% = 'inválida';
//$9-var = 'inválida';

echo '<br>';
var_dump($_SERVER['HTTP_HOST']);
var_dump($_SERVER);


?>