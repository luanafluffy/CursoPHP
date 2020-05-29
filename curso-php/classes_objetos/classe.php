<div class="titulo">Primeira classe</div>

<?php
//COmo definir uma classe
class Cliente {
    //Atributos e visibilidade
    public $nome = 'Anônimo';
    public $idade = 18;

    //Função
    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Silva';
$c1->idade = 27;
echo $c1->nome, '<br>'; //mostrar apenas um atributo

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 43;

echo $c1->apresentar(), '<br>'; //mostrar tudo do objeto
echo $c2->apresentar();