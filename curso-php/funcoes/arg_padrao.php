<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    echo "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null);
echo saudacao('Mestre', 'Supremo');


//Exemplo 2
function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida <br<";
    echo "Para comer: $bebida <br<";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

//Padrão no 1º parametro
function anotarPedido2($comida = "Pão", $bebida) {
    echo "Para comer: $comida <br<";
    echo "Para comer: $bebida <br<";
}

//anotarPedido2('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');