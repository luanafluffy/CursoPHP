<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_função<br>';

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
//echo soma(1,8) . '<br>';
carregarArquivo();

echo $variavel . '<br>';
echo soma(2, 5) . '!<br>'; //consegue chamar fora da função