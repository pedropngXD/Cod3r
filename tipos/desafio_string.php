<div class="titulo">Desafio String</div>

<?php

/*
Enunciado:
Avaliando os métodos na documentação da string.
Qual o método que a posição do texto 'abc'
na string: '!AbcaBcabc' retorne 1?
*/

echo strpos('!AbcaBcabc', 'abc'). '<br>';
echo stripos('!AbcaBcabc', 'abc'). '<br>';

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC')). '<br>';

?>