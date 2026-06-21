<div class="titulo">Operador Ternário</div>

<?php

$idade = 10;
$status;

if ($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}
echo "$status<br>";

//------------------------------//------------------------------//

$idade = 19;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo "$status<br>";

//------------------------------//------------------------------//

//nao e uma boa pratica mais de um operador ternario na mesma expressao

$idade = 66;
$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade' : 'Menor de idade';
echo "$status<br>";