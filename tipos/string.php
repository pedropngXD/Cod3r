<div class="titulo">Strings</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
//espaço e acento contam para o encoding UTF-8
echo '<br>';

//concatenação
echo "Nós também" . ' somos';
echo '<br>',"O número é " . 123;
echo '<br>', "Também aceito" , " vírgulas";
//br (html) aceita vírgulas 

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" ". "\\";

echo '<br>';
print("<br>Também existe a função print");
print"<br>Também existe a função print (sem parênteses)";

//algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('teste');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . strlen('Eu também');
echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // indice 7, até o 6-1 caracter
echo '<br>' . substr('Só uma parte mesmo', 7); // se passar apenas um parametro (indice), o php percorre ate o final da string
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');