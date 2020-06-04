<div class="titulo">PDO: Excluir</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// print_r($resultado);

echo "<hr>";

// $excluirSQL = "DELETE FROM cadastro WHERE id = :id"; 
$excluirSQL = "DELETE FROM cadastro WHERE id = :id"; 

$stmt = $conexao->prepare($excluirSQL);

if($stmt->execute([':id' => 2])) { //Tipo B
    echo "Sucesso! :)";
} else {
    echo "Erro: :(";
    print_r($stmt->errorInfo());
}

$conexao->close();