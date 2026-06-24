<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    [
        "nome" => "Pedro",
        "idade" => 21,
        "naturalidade" => "Rio Grande do Sul",
    ],
    [
        "nome" => "Maria",
        "idade" => "25",
        "naturalidade" => "Bahia",
    ]
];

print_r($dados);
echo '<br>' . $dados[0]['idade'] .'<br>';
echo '<br>' . $dados[1]['idade'] .'<br>';

$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];
print_r($dados);
echo '<br>' . $dados[2]['idade'] .'<br>';

$dados[2]["vizinho"] = "Chaves";
echo '<br>' . print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);
var_dump($dados[1000]);