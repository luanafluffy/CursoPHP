<div class="titulo">Membros Estáticos</div>

<?php 
class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variavel de classe (estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}<br>";
        // Tentativa 2
        // echo "Estática = {self::$static}<br>";
        // Tentativa 3
        echo "Estática = " . self::$static . "<br>"; //acessando atributo estatico
    }

    //Dentro de uma função estática só é possível aessar membros estáticos
    public static function mostrarStaticA() {
        //echo "Não estática = {$this->naoStatic}<br>"; - não estará disponivel this
        //echo "Estática = {$static}<br>";
        echo "Estática = " . self::$static . "<br>"; //acessando atributo estatico
    
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); //Não é a forma ideal -- funciona, mas não é interessante usar assim e sim assim:

echo '<br>';
echo A::$static, '<br>';
A::mostrarStaticA(); //Acessar uam funçao static diretamente da classe sem necessáriamente possuir uma instância

A::$static = 'Alterado membro de classe';
echo A::$static, '<br>';