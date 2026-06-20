<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p>Negação Lógica</p><hr>";

var_dump(true);
echo'<br>';

var_dump(false);
echo'<br>';

var_dump(!true); //not (negacao logica)
echo'<br>';

var_dump(!false); //not (negacao logica)
echo'<br>';

var_dump(!!true); //not (negacao logica) x2
echo'<br>';

var_dump(!!false); //not (negacao logica) x2
echo'<br>';

//------------------------------//------------------------------//

echo "<p>Tabela Verdade 'AND' (E)</p><hr>";


var_dump(true and true);
echo'<br>';

var_dump(true and false);
echo'<br>';

var_dump(false and true);
echo'<br>';

var_dump(false and false);
echo'<br>';


var_dump(true && 3 > 2 && 7 <= 7);
echo'<br>';

var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');
echo'<br>';

//------------------------------//------------------------------//

echo "<p>Tabela Verdade 'OR' (OU)</p><hr>";

var_dump(true || true);
echo'<br>';

var_dump(true || false);
echo'<br>';

var_dump(false || true);
echo'<br>';

var_dump(false || false);
echo'<br>';

// "or"  ou "||" fazem a mesma operacao
// normalmente o padrao a ser usado é "||"

var_dump(true or true);
echo'<br>';

var_dump(true or false);
echo'<br>';

var_dump(false or true);
echo'<br>';

var_dump(false or false);
echo'<br>';

//------------------------------//------------------------------//

echo "<p>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";

var_dump(true xor true);
echo'<br>';

var_dump(true xor false);
echo'<br>';

var_dump(false xor true);
echo'<br>';

var_dump(false xor false);
echo'<br>';

var_dump(true != true);
echo'<br>';

var_dump(true != false);
echo'<br>';

var_dump(false != true);
echo'<br>';

var_dump(false != false);
echo'<br>';

//------------------------------//------------------------------//
?>

<style>

p {
    margin-bottom: 0px;
    font-weight: bold;
}

hr {
    margin-top: 0px
}

</style>