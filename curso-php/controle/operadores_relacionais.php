<div class="titulo">Operadores Relacionais</div>

<?php
// ==
// === -> igualdade estrita
// !== -> deferente estrita


echo '<p class="divisao">Spaceship</p><hr>';
var_dump(5 <=> 1); 
// Primeiro operando maior = -1
// Segundo operando maior = 1
// Operandos iguais = 0


echo '<p class="divisao">Valores podem ser V ou F</p><hr>';
var_dump(!!5); //V
var_dump(!!0); //F
var_dump(!!""); //F
var_dump(!!" "); //V