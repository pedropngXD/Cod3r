<div class="titulo">Desafio Equação</div>

<?php

echo "Minha resolução: ";

$divisao = 10 ** 3;

$valor1 = (6 * (3+2)) **2;
$divisao1 = $valor1 / (3 * 2);
$resultado1 = $divisao1;

$valor2 = (1 - 5) * (2 - 7);
$divisao2 = $valor2 / 2;
$potencia2 = $divisao2 ** 2;
$resultado2 = $potencia2;

$subtracao = $resultado1 - $resultado2;

$resultadoFinal= ($subtracao ** 3) / $divisao;

echo $resultadoFinal;

echo '<br>', "___________________________________________________", '<br>';

echo "Resolução do professor: ";

$numA = (6 * (3 + 2)) **2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;

echo $final;

?>