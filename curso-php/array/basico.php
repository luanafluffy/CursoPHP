<div class="titulo">Básico</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);

$lista[0] = 1234;
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>' . $lista[4]; //elemento inexistente

$texto = 'Esse texto é um teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11];
echo '<br>' . $texto[11]; //cuidado
echo '<br>' . mb_substr($texto, 10, 2);