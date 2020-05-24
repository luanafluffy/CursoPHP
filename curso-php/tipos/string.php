<div class="titulo">Tipo String</div>

<?php
var_dump("Eu também!");


//concatenação
echo "Nós também" . " somos.";
echo "Também aceitamos" , " virgulas.";


//Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('quantas palavras?');
echo '<br>' . mb_strlen('quantas palavras?', "utf-8"); //calcula tamanho com utf8(não precisa especificar o segundo parametro)
echo '<br>' . substr("Só uma parte mesmo", 7, 6); // só um intervalo
echo '<br>' . substr("Só uma parte mesmo", 7); // do intervalo até o final
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); //substituição

?>