<div class="titulo">Visibilidade</div>

<?php

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        //$this->naoMostrar();
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!';
    }
    protected function sereiTransmitidoPorHerança() {
        echo 'Serei transmitido por herança!';
    }
}

$a = new A();
$a->mostrarA();
$a->sereiTransmitidoPorHerança(); //

//Só é possivel acessar as funções privadas se ela estiverem em um função publica. 
//Só é possivel acessar os atributos privados e protegidos se eles estiverem dentro de uma função publica.


class B extends A {
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>"; //está visivel nesta classe filhos
        echo "Class B) Privado = {$this->privado}<br>"; //Não consegue ver
    }
}
echo '<br><br>';
$b = new B();
//$b->sereiTransmitidoPorHerança(); //Não é possivel

//Nivel de visibilidade das classes diante dos atributos e metodos.