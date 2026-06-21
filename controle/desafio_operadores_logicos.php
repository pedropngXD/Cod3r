<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> Terca e Quinta

    - Se os dois trabalhos forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorteve
    - Se nenhum for executado -> Fica em casa
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Calcular</button>
</form>

<style>
    button, select {
        font-size: 1.7rem;
    }
</style>

<?php

echo $_POST["t1"];
echo $_POST["t2"];

//------------------------------//------------------------------//

// minha resolucao

    echo'<br>';

    $terca = !!$_POST["t1"];
    $quinta = !!$_POST["t2"];

    if  ($terca && $quinta) {
        echo "<br>TV 50' e Sorvete";
    } elseif ($terca || $quinta) {
        echo "<br>TV 32' e Sorvete";
    } else {
        echo "<br>Fica em casa";
    }

//------------------------------//------------------------------//

// resolucao do professor

    $t1 = $_POST['t1'] === "1";
    $t2 = !!$_POST["t2"];
    $tv = '';
    $sorvete = false;
    
    if ($t1 && $t2) {
        $tv = '50"';
    } elseif ($t1 || $t2) {
        $tv = '32"';
    }
    
    if ($t1 || $t2) {
        $sorvete = true;
    }
    
    if ($tv) {
        $resultado = "Vamos comprar uma TV de $tv";
    } else {
        $resultado = "Sem TV dessa vez :(";
    }
    
    $saudavel = !$sorvete;
    
    if ($saudavel) {
        $resultado .= "<br> Estamos mais saudáveis!";
    } else {
        $resultado .= "<br> Sorvete liberado!";
    }
    
    echo "<p>$resultado</p>";