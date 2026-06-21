<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="metro-km">Metro > Km</option>
        <option value="c-f">Celsius > Fahrenheit</option>
        <option value="f-c">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<!--------------------------------------------------------------->

<?php

const fatorKmMilha = 0.621371;
const fatorMetroKm = 1000;
const fatorCelFah = 1.8;

$param = $_POST['param'] ?? 0;
$conversao = $_POST['conversao'];

switch ($conversao) {
    case 'km-milha':
        $valor = $param / fatorKmMilha;
        $mensagem = "$param Km(s) = $valor Milha(s)";
        break;
    case 'milha-km':
        $valor = $param / fatorKmMilha;
        $mensagem = "$param Milha(s) = $valor Km(s)";
        break;
    case 'km-metro' :
        $valor = $param / fatorMetroKm;
        $mensagem = "$param Km(s) = $valor Metro(s)";
        break;
    case 'metro-km':
        $valor = $param / fatorMetroKm;
        $mensagem = "$param Metro(s) = $valor Km(s)";
        break;
    case 'c-f':
        $valor = $param * fatorCelFah + 32;
        $mensagem = "{$param}° Celsius = {$valor}° Fahrenheit";
        break;
    case 'f-c':
        $valor = ($param - 32) / fatorCelFah;
        $mensagem = "{$param}° Fahrenheit = {$valor}° Celsius";
        break;
    default :
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";