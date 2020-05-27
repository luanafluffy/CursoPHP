<div class="titulo">Desafio nº 1 Switch </div>

<h5>Conversor De Temeperaturas</h5>
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km - Metro</option>
    </select>
    <button>Calcular</button>
    <!-- <input type="submit" value="Converter"> - mesma coisa que linha anterior -->
</form>

<style>
    form > * {
        font-size: 1.2rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371; //1 Km = 0,621371 Milha
const FATOR_METRO_KM = 0.001; //1 Metro = 0,001 Km


if(isset($_POST['param']) and isset($_POST['conversao'])){
    $param =  $_POST['param'] ?? 0; //setar o valor zero
    $conversao = $_POST['conversao'];

    switch ($conversao) {
        case 'km-milha':
            $distancia = $param * FATOR_KM_MILHA;
            $mensagem = "$param Km(s) = $distancia Milha(s)";
            break;
        case 'milha-km':
            $distancia = $param / FATOR_KM_MILHA;
            $mensagem = "$param Milha(s) = $distancia Km(s)";
            break;

        case 'metro-km':
            $distancia = $param / FATOR_METRO_KM;
            $mensagem = "$param Metro(s) = $distancia Km(s)";
            break;        
        case 'km-metro':
            $distancia = $param * FATOR_METRO_KM;
            $mensagem = "$param Km(s)  = $distancia Metro(s)";
            break;
        default:
            $mensagem = 'Nenhum Valor calculado!';
        break;
    }
    echo($mensagem);
}