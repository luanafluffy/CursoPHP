<div class="titulo">Foreche</div>

<?php
// Exemplo 1
$array = [
    1 => 'Domingo', 
    'Segunda', 
    'Terça', 
    'Quarta', 
    'Quinta', 
    'Quinta', 
    'Sexta', 
    'Sabado'
];


foreach ($array as $valor) {
    echo "$valor <br>";
}
echo '<hr>';

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

// Exemplo 2
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b','c', 'd']
];

foreach ($matrix as $linha) {
    //echo "$linha <br>";
    foreach($linha as $valor) {
        echo "$valor <br>";
    }
    echo '<br>';
}

// Exemplo 3
$numeros = [1, 2, 3, 4, 5];
foreach($numeros as &$dobrar) { //variavel por referencia
    $dobrar *= 2;
    echo "$dobrar <br>";
}

print_r($numeros);