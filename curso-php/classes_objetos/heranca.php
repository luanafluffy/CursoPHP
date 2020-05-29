<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct() {
        echo 'Pessoa diz: Tchau!!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

//Usuario herda de Pessoa - é uma sub classe
class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        // $this->nome = $nome; - está na outra classe (pai)
        // $this->idade = $idade; - está na outra classe (pai)
        parent::__construct($nome, $idade); //chamar o construtor para atributos da classe pai
        $this->login = $login;
        echo 'Usuario Criado! <br>';
    }

    function __destruct() {
        echo 'Usuário diz: Tchau!! <br>';
        parent::__destruct(); //chamando o destrutor da classe pai
    }

    //Comportamento especifico de usuário - sobrescrevendo classe pai
    public function apresentar() {
        echo "@{$this->login} ";
        parent::apresentar(); //chamando o comportamento da classe pai
        
    }

}

$usuario = new Usuario('Gustavo Mendoça', 21, 'gust_mend');
$usuario->apresentar();

//chamar destrutor
unset($usuario);