<div class="titulo">Básico</div>

<?php

$lista = array(1, 2, 3.4, "texto");

echo $lista;

echo '<br>';

var_dump($lista);

echo '<br>';

print_r($lista);

$lista[0] = 10000;
print_r($lista) . '<br>';

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];

echo '<br>';

var_dump($lista[4]);

echo '<br>';

$texto = 'Esse é um texto teste';

echo '<br>' . $texto[0];
echo '<br>' . $texto[1];
echo '<br>' . $texto[2];
echo '<br>' . $texto[3]; //cuidado com o encode
echo '<br>' . mb_substr($texto, 10, 1); //melhor forma para utf-8