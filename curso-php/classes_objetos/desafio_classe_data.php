<div class="titulo">Desafio Classe Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function mostrar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$d1 = new Data();
$d1->dia = '28';
$d1->mes = '05';
$d1->ano = '2020';
echo $d1->mostrar();

echo '<br>';
$casamento = new Data;
$casamento->dia = '15';
$casamento->mes = '05';
$casamento->ano = '2019';
echo $casamento->mostrar();
