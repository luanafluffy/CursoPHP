<div class="titulo">Desafio Tabela #02</div>

<h3>Informe a quantidade de:</h3><br>
<form action="#" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number"  value= <?= $_POST['linha'] ?? 10?> name="linha">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" value= <?= $_POST['coluna'] ?? 10?>  name="coluna">
    </div>
    <button>Gerar Tabela</button>
</form>

<?php
if(isset($_POST['linha']) && isset($_POST['coluna'])) {
    $linha = intval($_POST['linha']);
    $coluna = intval($_POST['coluna']);
    echo '<br>';
    echo 'Linha(s): ' . $linha;
    echo '<br>Coluna(s): ' .$coluna;

    $num = 1;
    echo '<table>';
        $i = 0;
            while($linha > $i) {  
                echo '<tr>'; 
                    $j = 0;
                    while($coluna > $j) {
                        echo "<td> $num </td>";
                        $j++;
                        $num++;
                    }
                    $i++;
                echo '</tr>'; 
            }
    echo '</table>';
}

?>

<style>
    form > * {
        font-size: 1.8rem;
    }
    form > div {
        margin-bottom: 10px;
    }
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr {
        border: 1px solid #444;
    }
    table td {
        padding: 10px 20px;
    }
</style>