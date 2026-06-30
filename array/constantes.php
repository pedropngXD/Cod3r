<div class="titulo">Constantes</div>

<?php

const FRUTAS = ['laranja', 'abacaxi'];
// FRUTAR = 'teste';
// FRUTAS[0] = 'banana';  --- funciona no JS mas nao em PHP
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["fiat" => "uno", "ford" => "fiesta" ];
//CARROS["BMW"] = "325i"
echo '<br>' . CARROS["fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];