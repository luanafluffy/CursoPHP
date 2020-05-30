<?php namespace Outro\Nome; ?>

<div class="titulo">Use/AS</div>

<?php
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

function soma($a, $b) {
    return $a . $b; //Eu sei!!
}

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . ' -> ' .
             __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>'; //Não funciona de forma relativa
echo \Nome\Bem\Grande\constante . '<br>'; //Funciona se colocar a barra antes

use const Nome\Bem\Grande\constante;
echo constante . '<br>'; // Com o use não  tem problema no caminho relativo

use Nome\Bem\Grande as ctx; //renomeando
echo soma(1, 2) . '<br>';
echo ctx\soma(1, 2) . '<br>';

// use function Nome\Bem\Grande\soma; -- Não funciona se não reonomear
use function Nome\Bem\Grande\soma as somaReal; //renomeando função 
echo somaReal(100, 212);


$a = new Classe();
$a->func();
echo '<br>';

$b = new \Nome\Bem\Grande\Classe();
$b->func();
echo '<br>';

$c = new ctx\Classe(); //usando o alias/apelido
$c->func();
echo '<br>';

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();