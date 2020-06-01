<div class="titulo">Gerenciando Sessão</div>

<?php
// session_id('jrchpj5k3gnn3mt3arm2lt8q70');
session_start();
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id(); //O id é gera um novo id
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
} 

//Toda sessão tem um Id, nessa aula foi visto como atalizar o id da sessão.
//Como regerar o id.