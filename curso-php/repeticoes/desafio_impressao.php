<div class="titulo">Desafio Impressão</div>
<!--
Enunciado:
- Imprima apenas os valores do array que contém indice par
- Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE
-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF",
];

//Laço for
for ($i=0; count($array) > $i ; $i+=2) { 
    echo "$array[$i] ";
}

echo '<br>';

//Laço foreach
foreach ($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    print("$valor ");
}