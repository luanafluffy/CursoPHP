<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "Naturalidade" => "Fortaleza"
];

$dados2["endereco"] ="Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); //É UMA ARRAY?
echo '<br>' . count($dadosCompletos); //Quantos elementos?

$indice = array_rand($dadosCompletos); //pegar indice de forma rondomica
echo  '<br>'. '<br>'."$indice = $dadosCompletos[$indice]";
echo " {$dadosCompletos['idade']}";
echo " ${dadosCompletos['idade']}";

$impares = [1, 3, 5, 7, 9];
$pares = [2, 4, 6, 8, 10];

//Juntar dois arrays pelos indexs, baseado nas chaves
$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

//Juntar dois arrays 
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

//Ordenar Array
sort($decimais);
echo '<br>';
print_r($decimais);

unst($dadosCompletos["Nome"]);
echo '<br> aaaa';
print_r($dadosCompletos);