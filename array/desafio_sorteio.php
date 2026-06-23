<div class="titulo">Desafio Sorteio</div>

<form action="#" method="post">
    <div class="princesas">
        <h1>
            <button id="sorteio" title="randomize">
                Sorteie sua princesa
            </button>
        </h1>
    </div>
</form>

<?php

//minha resposta:

$nomes = [
    "Elza" => 1,
    "Rapunzel" => 2,
    "Branca de neve" => 3,
    "Cinderela" => 4,
    "Moana" => 5
];

$sorteio = array_rand($nomes);
echo '<br>' . $sorteio;

//resposta do professor:

$nomes = [
    "Elza",
    "Rapunzel",
    "Branca de neve",
    "Cinderela",
    "Moana"
];

$sorteio = array_rand($nomes);
echo "<div center><h1>{$nomes[$sorteio]}</h1></div>"

?>

<style>
    [center] {
        display:flex;
        justify-content: center;
    }
</style>