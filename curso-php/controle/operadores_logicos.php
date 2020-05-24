<div class="titulo">Operadores Lógicos</div>

<?php

// V ou F
var_dump(true);
var_dump(!true); //not

//Tabela verdade
// and &&
// or ||
// xor -> Exclusivo - apenas um verdadeiro (tipo o ou comum mas não pode ser duas opções verdadeiras)
// !=

echo '<p class="divisao">Exemplo</p><hr>';
$idade = 65;
$sexo = 'M';

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
}elseif ($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
}else {
    echo 'Vai ter que trabalhar mais um pouco...';
}