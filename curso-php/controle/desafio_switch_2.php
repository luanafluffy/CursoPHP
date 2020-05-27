<div class="titulo">Desafio nº2 Switch</div>

<h5>Conversor Tamanhos</h5>
<form action="#" method="post">
    <input type="text" name="param">

    <select name="conversao" id="conversao">
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="celsius-kelvin">Celsius > Kelvin</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
        <option value="fahrenheit-kelvin">Fahrenheit > Kelvin</option>
        <option value="kelvin-fahrenheit">Kelvin > Fahrenheit</option>
        <option value="kelvin-celsius">Kelvin - Celsius</option>
    </select>
    
    <br><br>
    <button>Calcular</button>
    <!-- <input type="submit" value="Converter"> - mesma coisa que linha anterior -->
</form>

<style>
    form > * {
        font-size: 1.2rem;
    }
</style>

<?php
const FATOR_CELSIUS_FAHRENHEIT = 32; //1 C° = 33.8 F°
const FATOR_CELSIUS_KELVIN = 273.15; //1 C° = 273.15 K°

if(isset($_POST['param']) and isset($_POST['conversao'])){
    $param =  $_POST['param'] ?? 0; //setar o valor zero
    $conversao = $_POST['conversao'];

    switch ($conversao) {
        case 'celsius-fahrenheit':
            $distancia = ($param * (9/5)) + FATOR_CELSIUS_FAHRENHEIT;
            $mensagem = "$param C° = $distancia F°";
            break;
        case 'celsius-kelvin':
            $distancia = $param + FATOR_CELSIUS_KELVIN;
            $mensagem = "$param C° = $distancia K°";
            break;
        case 'fahrenheit-kelvin':
            $distancia = ($param - FATOR_CELSIUS_FAHRENHEIT) * (5/9) + FATOR_CELSIUS_KELVIN;
            $mensagem = "$param F° = $distancia K°";
            break;
        case 'fahrenheit-celsius':
            $distancia = ($param - FATOR_CELSIUS_FAHRENHEIT) * (5/9);
            $mensagem = "$param F° = $distancia C°";
            break;

        case 'kelvin-fahrenheit':
            $distancia = ($param - FATOR_CELSIUS_KELVIN) * (9/5) + FATOR_CELSIUS_FAHRENHEIT;
            $mensagem = "$param K° = $distancia F°";
            break;        
        case 'kelvin-celsius':
            $distancia = $param - FATOR_CELSIUS_KELVIN;
            $mensagem = "$param K° = $distancia C°";
            break;
        default:
            $mensagem = 'Nenhum Valor calculado!';
        break;
    }
    echo($mensagem);
}