<div class="titulo">Interpolação</div>

<?php
//Aspas simples nãi interpola
//Aspas duplas interpola
//Exemplo
$idade = 19;
echo "Eu tinha ${idade} anos.<br>";
//echo 'Eu tinha ${idade} anos.'; ERRO
echo 'Eu tinha ' . $idade . ' anos.'; 