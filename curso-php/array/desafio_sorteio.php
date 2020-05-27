<div class="titulo">Desafio Sorteio</div>

<?php
$nome = ["Elza", "Rapunzel", "Banca de Neve", "Cinderela"];

$index = array_rand($nome);
echo "<div center><h1>$nome[$index]</h1></div>";

?>
<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>