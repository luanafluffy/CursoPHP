<div class="titulo">Operador Ternário</div>

<?php

$idade = 70;
$status;

$status = $idade >=18 ? 'Maior de idade' : 'Menor de idade';
echo "<br> $status";

//Com mais expressões - não sendo muito legivel
$status = $idade >= 18 ? $idade > 65 ? 'Aposentado' : ' Maior de idade' : 'Menor de idade';
echo "<br> $status";

$tipoMaiorIdade = $idade > 65 ? 'Aposentado' : ' Maior de idade';
$status = $idade >= 18 ? $tipoMaiorIdade : 'Menor de idade';
echo "<br> $status";