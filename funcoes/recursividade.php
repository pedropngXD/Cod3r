<div class="titulo">Responsividade</div>

<?php

function somaUmAte ($numero) {
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(10) . '<br>';

function somaRecursivaUmAte ($numero) {
    //condição de parada
    if($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(10) . '<br>';

function somaRecursivaEconomica ($numero) {
    return $numero === 1 ? 1 :  $numero + somaRecursivaEconomica($numero -1);
}

echo somaRecursivaEconomica(10) . '<br>';