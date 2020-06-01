<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];


if($_POST['email']) {
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "123456",
        ],
        [
            "nome" => "Luana Carvalho",
            "email" => "luana@gmail.com",
            "senha" => "654321",
        ],
    ];

    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30; //qtde de segundos de 30 dias
            setcookie('usuario', $usuaio['nome'], $exp);

            header('Location: index.php');
        }
    }


    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuario/Senha inválido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\css\estilo.css">
    <link rel="stylesheet" href="recursos\css\login.css">
    <title>Curso PHP</title>
</head>
<body class='login'>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if ($_SESSION['erros']) : ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label> 
                    <input type="email" name="email" id="email" value= <?= $_POST['email'] ?  $_POST['email'] : null ?>>
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" value= <?= $_POST['senha'] ?  $_POST['senha'] : null ?>>
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer  class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>

