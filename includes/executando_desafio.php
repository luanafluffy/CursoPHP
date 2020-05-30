<div class="titulo">Desafio Include Com Classe</div>

<?php
include_once('desafio_classe_usuario.php');

$usuario = new Usuario('Gustavo Mendoça', 21, 'gust_mend');
echo $usuario->apresentar();

//chamar destrutor
unset($usuario);