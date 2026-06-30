<div class="titulo">$_GET</div>

<?php

echo "Mudar a url com &chave=valor<br>";

echo $_GET;
echo '<br>';
print_r($_GET); //parametros do get vêm depois da url usando a interrogacao
echo "<br>{$_GET['nome']}";