<div class="titulo">Inserir Registro #01</div>

<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro 
(nome, nascimento, email, site, filhos, salario)
VALUES (
    'Lucas Dantas',
    '2005-07-29',
    'luquinhas@email.com.br',
    'https://luccas.sites.com.br',
    0,
    300.87
)";



$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();