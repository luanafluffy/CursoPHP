<div class="titulo">Desafio PI</div>

<?php
$pi_original = pi();
$pi = 3.14;
echo $pi_original;

if($pi == $pi_original) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

//Resposta
echo '<br>' . ($pi - pi());

if($pi - pi() <= 0.01) {
    echo "<br>Praticamente iguais";
}else {
    echo '<br>Valor errado!';
}