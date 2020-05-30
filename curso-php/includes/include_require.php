<div class="titulo">Include vs Require</div>

<?php

ini_set('display_errors', 1); //mostra o erro

include('arquivo_inexistente.php'); //não para a aplicação
echo 'Usando include com arquivo inexistente...<br>';

require('arquivo_inexistente.php'); //gera um erro fatal e para a aplicação
echo 'Usando require com arquivo inexistente...<br>';

echo 'Não achou mesmo...<br>';