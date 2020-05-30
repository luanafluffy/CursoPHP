<?php
include_once('desafio_classe_pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        // $this->nome = $nome; - está na outra classe (pai)
        // $this->idade = $idade; - está na outra classe (pai)
        parent::__construct($nome, $idade); //chamar o construtor para atributos da classe pai
        $this->login = $login;
    }

    //Comportamento especifico de usuário - sobrescrevendo classe pai
    public function apresentar() {
        $login = "@{$this->login} ";
        return $Login . parent::apresentar(); //chamando o comportamento da classe pai
    }
}