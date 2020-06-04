<div class="titulo">Criar Banco</div>

<?php
require_once "conexao.php";

$conexao = novaConexao(null);
// $sql = 'CREATE DATABASE curso_php';
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php'; //esse comando não gera erro

$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso! :)";
}else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();