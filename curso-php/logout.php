<?php
session_start();
session_destroy();
unset($_COOKIE['usuario']);
setcookie('usuario', ''); //limpando o valor
header('Location: login.php');