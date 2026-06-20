<div class="titulo">Operadores Relacionais</div>

<?php

// var_dump(1 == 1); //true
// echo"<br>";
// 
// var_dump(1 >= 1); //true
// echo"<br>";
// 
// var_dump(1 < 23); //true
// echo"<br>";
// 
// var_dump(1 <= 7); //true
// echo"<br>";
// 
// var_dump(1 > 1); //false
// echo"<br>";
// 
// var_dump(1 != 1); //false
// echo"<br>";
// 
// var_dump(1 <> 1); //false
// echo"<br>";

//------------------------------//------------------------------//

var_dump(111 == '111'); //true
echo"<br>";

var_dump(111 === '111'); //false
echo"<br>";

var_dump(111 != '111'); //false
echo"<br>";

var_dump(111 !== '111'); //true
echo"<br>";

//------------------------------//------------------------------//

echo'<p class="divisao">Relacionais no If / Else</p><hr>';

$idade = 15;

if($idade < 18) {
    echo "Menor de idade = $idade anos <br>";
} elseif ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos<br>";
}

//------------------------------//------------------------------//

echo '<p class="divisao">Spaceship</p><hr>';

var_dump(500 <=> 3);
echo"<br>";

var_dump(50 <=> 50);
echo"<br>";

var_dump(5 <=> 50);
echo"<br>";

//------------------------------//------------------------------//

echo '<p class="divisao">Valores -> True / False</p><hr>';

var_dump(!!5);
echo"<br>";

var_dump(!!0);
echo"<br>";

var_dump(!!"");
echo"<br>";

var_dump(!!" ");
echo"<br>";