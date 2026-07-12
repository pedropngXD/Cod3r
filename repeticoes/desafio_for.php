<div class="titulo">Desafio Laço For</div>

<!--
#
##
###
####
#####
1) Pode usar incremento i++
2) Nao pode usar incremento i++
-->


<?php

// 1 - Com incremento i++

$array = [
    '#', 
    '##', 
    '###', 
    '####', 
    '#####'
];

for ($i = 0; $i < count($array); $i++) {
    echo"{$array[$i]} <br>";
}

echo '<br>';

//--------------------------------//

$impressao = '';
for($cont = 1; $cont <=5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

// 2 - Sem incremento i++

for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#') {
    echo "$impressao2 <br>";
}