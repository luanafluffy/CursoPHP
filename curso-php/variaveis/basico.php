<div class="titulo">Básico</div>

<?php
//Saber se a variavel está setada

$a = 1; 
$b = 2;
$soma = $a+$b;
echo $soma;
echo '<br>';

echo isset($soma); // confere para saber se possui valor, se sim retorna '1', se não retorna nada
echo '<br>';

unset($soma); //Limpa valor de variavel
echo '<br>';

echo !isset($soma);

//Nomes de variável
