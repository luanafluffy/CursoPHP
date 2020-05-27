<div class="titulo">Comparação Arrays</div>

<?php

//Tudo igual = TRUE
$arra1 = ['nome' => 'Maria', 'idade' => 20];
$arra2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($arr1 == $arr1);
var_dump($arr1 === $arr1);

//Atributos ao contrario = TRUE
$arr3 = ['idade' => 20, 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr3); //true
var_dump($arr1 === $arr3); // false - a ordem influencia
var_dump($arr1 != $arr3); //False - eles são iguais independente da ordem
var_dump($arr1 !== $arr3); // são estritamente diferentes? Sim - pq a ordem influncia

echo '<br>';
$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4); //True - o tipo não influencia
var_dump($arr1 === $arr4); //False - o tipo influencia e ordem tmb

//mesmas chaves, valores e tipos