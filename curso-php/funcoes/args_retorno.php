<div class="titulo">Arg. & Retorno</div>

<?php
function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

echo obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>'. obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Wagner');

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>', soma(4,4);
echo '<br>', soma(45,78);

function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

//Troca por referencia
trocarValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;
