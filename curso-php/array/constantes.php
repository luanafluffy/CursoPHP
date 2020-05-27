<div class="titulo">Array Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];
//FRUTAS[0] = 'banana'; - Não pode ser mudado

const CARROS = ['Fiat' => 'Uno', 'Ford' => 'Fiesta'];
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[] = 'Rio de Janeiro'; - Não pode ser mudada
echo '<br>' . CIDADES[1];