<div class="titulo">Interpolação</div>

<?php

$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";
echo "<br> $numero + 1";

$texto = "A sua note é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br> Eu tenho 5 $objetos";
echo "<br> Eu tenho 5 {$objeto}s";
echo "<br> Eu tinho 5 { $objeto}s mas perdi 3 {$objeto }s";
echo "<br>";
//echo "{$numero + 1}";    operações dentro da interpolação não funcionam dentro do php