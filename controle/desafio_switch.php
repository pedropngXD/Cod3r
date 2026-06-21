<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="metro-km">Metro > Km</option>
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

$param = $_POST['param'] ?? 0;
$conversao = $_POST['conversao'];

switch ($conversao) {
    case 'km-milha':
        $distancia = $param / fatorKmMilha;
        $mensagem = "$param Km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / fatorKmMilha;
        $mensagem = "$param Milha(s) = $distancia Km(s)";
        break;
    case 'km-metro' :
        $distancia = $param / fatorMetroKm;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
        break;
    case 'metro-km':
        $distancia = $param / fatorMetroKm;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
        break;
    default :
        $mensagem = "Nenhum valor calculado!";
} echo "<p>$mensagem</p>";