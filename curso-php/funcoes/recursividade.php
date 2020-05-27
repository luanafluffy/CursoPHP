<div class="titulo">Recursividade</div>

<h3>Fatorial</h3>
<?php

function somaUmAte1($numero) {
    $soma= 0;
    for (; $numero >= 1; $numero-- ) { 
        $soma += $numero;
    }
    return $soma;
}
echo somaUmAte1(5) . '<br>';

//Outra forma
function somaUmAte2($numero) {
    $soma= 0;
    for ($i=0; $i <= $numero; $i++) { 
        $soma += $i;
    }
    return $soma;
}
echo somaUmAte2(5) . '<br>';

//Com recursividade
function somaRecursivaUmAte($numero) {
    //Condição de parada!
    if($numero === 1) {
        return 1;
    }else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }   
}

echo somaRecursivaUmAte(150) . '<br>';

//Recursividade mais reduzida
function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150) . '<br>';
