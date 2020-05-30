<?php namespace contexto; //Precisa ser a primeira sentença do codigo ?> 

<div class="titulo">Exemplo Básico</div>

<?php 
echo __NAMESPACE__ . '<br>';
const constante1 = 123; //constantes não usam dolar '$'
define('constante2', 234); //para associar ao namespace precisa explicitamente colocar o nome
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 456);

echo constante1 . '<br>';
echo constante2 . '<br>';
// echo contexto\constante3 . '<br>';
echo \contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
// echo constante4 . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b){
    return $a + $b;
}

echo \contexto\soma(1,2) . '<br>';
echo soma(1, 2) . '<br>';

function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1; 
}

//Usando a função redefinida
echo strpos('Texto genérico para busca', 'busca') . '<br>';

//Usando a função do php
echo \strpos('Texto genérico para busca', 'busca') . '<br>';
