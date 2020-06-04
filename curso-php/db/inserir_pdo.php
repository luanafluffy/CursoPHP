<div class="titulo">PDO Inserir</div>

<?php
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
(nome, email, nascimento, site, filhos, salario)
VALUES (
    'Luana Silva',
    'luaninha@gmail.com',
    '1998-7-11', 
    'http://luana.com.br',
    3,
    32323
)";

$conexao = novaConexao();
// print_r(get_class_methods($conexao));

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}
$conexao->close();