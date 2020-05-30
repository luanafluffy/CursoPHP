<div class="titulo">Include Once</div>

<?php
ini_set('display_errors', 1);

include('include_once_arquivo.php');
//require('include_once_arquivo.php');

echo "Variavel = '{$variavel}'.<br>";
$variavel = 'Variavel Alterada';
echo "Variavel = '{$variavel}'.<br>";

//Variavel vai ser redefinida
include('include_once_arquivo.php');
echo "Variavel = '{$variavel}'.<br>";
$variavel = 'Variavel Alterada';
echo "Variavel = '{$variavel}'.<br>";

include_once('include_once_arquivo.php');
echo "Variavel = '{$variavel}'.<br>";

require_once('include_once_arquivo.php');
echo "Variavel = '{$variavel}'.<br>";
