<div class="titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
//While
while($contador < VALOR_LIMITE){
    echo "While $contador <br>";
    $contador++;
}

echo '<br>';

//Do while
do {
    echo "Do While $contador <br>";
    $contador++;
}while($contador < VALOR_LIMITE);

echo '<br>';

//for
$contador = 0;
for(;$contador < VALOR_LIMITE;){
    echo "For $contador <br>";
    $contador++;
}

//Do WHile
$contador = 100;
do {
    echo "Do-While $contador <br>";
    $contador++;
}while($contador < VALOR_LIMITE);

//booleano
$contador = 0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}