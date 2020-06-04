<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * from cadastro";
//fetchAll -> se não passar nenhum parametro vai trazer tudo
//fetchAll(PDO::FETCH_NUM) -> traz a chave e valor indexado
//fetchAll(PDO::FETCH_ASSOC) -> Traz somente um array associativo
//fetchAll(PDO::FETCH_CLASS) -> Traz em formato de classe
//fetchAll(PDO::FETCH_BOTH) -> Traz o array associativo e o array numerico
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($resultado);

echo "<hr>";

// $sql = "SELECT * FROM cadastro LIMIT ? OFFSET ?"; //OFFSET= a partir de quanto ele começa?
$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio"; //nomeando 

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO:: PARAM_INT); //precisa informar o tipo do parametro
$stmt->bindValue(':inicio', 3, PDO:: PARAM_INT);

// print_r(get_class_methods($stmt));

if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode();
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = :id"; //tipo B e C / O tipo A é com ?
$stmt = $conexao->prepare($sql);
// tipo B: $stmt->bindValue(':id', 6); //Pode adicionar o tipo do 2º parametro (opcional) "PDO:: PARAM_INT" como 3º parametro
// tipo A: if($stmt->execute([6])) {
// Tipo B: if($stmt->execute()) {
if($stmt->execute([':id'=> 6])) { //Tipo C
    $resultado = $stmt->fetch(); //Traz um unico registro
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao->close();