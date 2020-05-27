<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10; ) {
    echo "$cont <br>";
    $cont++;
}

echo "<hr>";

$array = [
    1 => 'Domingo', 
    'Segunda', 
    'Terça', 
    'Quarta', 
    'Quinta', 
    'Quinta', 
    'Sexta', 
    'Sabado'
];

print_r($array);

echo "<hr>";

for($i = 1; $i <= count($array); $i++) {
    echo "{$array[$i]} <br>";
}

echo "<hr>";

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b','c', 'd']
];

for($i = 0; $i < count($matrix); $i++) {
    echo "{$matrix[$i]}<br>";
    for($j = 0; $j < count($matrix[$i]); $j++)) {
        echo "{$matrix[$i][$j]}<br>";
    }
echo '<br>'
}


