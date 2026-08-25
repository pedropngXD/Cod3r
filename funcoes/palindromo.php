<div class="titulo">Desafio Palíndromo</div>

<?php

function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) -1;
    for ($i = 0; $i <= $ultimoIndice; $i++) {
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara') . '<br>';
echo palindromo('bola') . '<br>';
echo palindromo('ana') . '<br>';
echo palindromo('abccba') . '<br>';

echo '______________________________' . '<br>';

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSimples('arara') . '<br>';
echo palindromoSimples('bola') . '<br>';
echo palindromoSimples('ana') . '<br>';
echo palindromoSimples('abccba') . '<br>';