<div class="titulo">Desafio Palindromo</div>

<?php
function ePalindromo($palavra){

    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0 ; $i <= $ultimoIndice ; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não';
        }
    }
    return "Sim";
}

$palavra = 'ana';
$resposta = ePalindromo($palavra);
echo $resposta;

//USando API 
function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSimples('ana') . '<br>';