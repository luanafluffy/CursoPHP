<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>'; //qtde de segundos
echo date('D, d \d\e M \d\e Y, H:i A') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';

// https://www.php.net/manual/en/function.time.php
// https://www.php.net/manual/en/function.date.php
// https://www.php.net/manual/pt_BR/function.strftime.php

//Em português
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
echo strftime('%A, %d de %B de %Y', time()) . '<br>'; 
// https://www.php.net/manual/en/function.setlocale

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);