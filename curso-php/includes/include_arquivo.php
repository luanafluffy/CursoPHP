<?php
echo 'Carregando: include_arquivo<br>';

$variavel = 'Estou definida';

//proteção de redifinição de função
if(!function_exists('soma')){ //Função existe?
    function soma($a, $b){
        return $a + $b;
    }
}