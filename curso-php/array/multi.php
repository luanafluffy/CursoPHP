<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
        'nome' => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        'nome' => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

// Adicionando mais um elemento
$dados[] = [
    'nome' => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

print_r('<br>' . $dados);
echo '<br>' . $dados[2]['idade'];

// Adicionando mais um atributo
$daddo[2]["Vizinho"] = "Chaves";
echo '<br>';
print_r($dados[2]);

//retirando dado do array multidimensional
unset($dados[1]);
print_r($dados);
