<div class="titulo">Closure  & Callable</div>

<?php

//Função Anonima - callable
$soma1 = function ($a, $b) {
    return $a + $b;
};

//Função - Callable
function soma2($a, $b) {
    return $a + $b;
}

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não' ). '<br>';

echo soma2(2, 3) . ' ';
echo (is_callable(soma2) ? 'Sim' : 'Não' ). '<br>';

var_dump($soma1);

//Função 
function executar1($a, $b, $op, Callable $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar1(100, 100, '+', $soma1);
executar1(3000, 3000, '+', soma2);
