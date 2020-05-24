<div class="titulo">Desafio Equação</div>

<?php
$num1 = (6 * (3 + 2))**2;
$den1 = 3*2;
$resultado1 = $num1/$den1;

$num2 = (1 - 5) * (2 - 7);
$den2 = 2;
$resultado2 = ($num2/$den2)**2;

$den3 = 10**3;

$resultado_final = ($resultado1 - $resultado2) **3 / $den3;
echo "O resultado final é " . $resultado_final . ".";