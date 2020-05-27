<div class="titulo">Arg. Variaveis</div>

<?php
function soma($a, $b){
    return $a + $b;
}

echo soma(14, 15) . '<br>';

function recebeNumeros(...$numeros) {
    print_r($numeros);
}

//A função recebe um array
recebeNumeros(1, 2, 3);


//somando um array
function somaCompleta2(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

//somando um array numa função array
echo '<br>Soma de array 1: ' . somaCompleta2(1, 2, 3);

function somaArray(...$numeros) {
    print_r($numeros);
}

$array = [1, 3, 3];
//A função recebe um array
echo '<br>Soma de array 2: ' . somaArray(...$array); // OS tres pontinhos representa os dados do array para preencher os parametros


//parametros normais com parametros variaveis
function membros($titular, ...$dependentes) {
    echo "Titular: $titular <br>";
    if($dependentes) {
        foreach ($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';
echo '<br>';
membros('Ana Silva', "Pedro", "Rafaela");

echo '<br>';
membros('Ana Silva', 'Junior');