<div class="titulo">Constantes</div>

<?php
// É possivel usar uma variavel na atribuição com variavel tipo const dessa maneira

define('PI', 3.1415);
echo PI;

// Não é possivel usar uma variavel na atribuição com variavel tipo const dessa maneira
const NOVA_TAXA = 123;

// Saber qual Linha está
echo '<br> Linha: ' . __LINE__;

// Saber qual Arquivo está 
echo '<br> Arquivo: ' . __FILE__;

// Saber qual Diretório está 
echo '<br> Arquivo: ' . __DIR__;