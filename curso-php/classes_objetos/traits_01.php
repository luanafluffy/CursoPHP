<div class="titulo">Traits #01</div>

<?php
trait validacao {
    public $a = 'Valor a';

    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor b';
    private $c = 'Valor c (privado)';

    public function validarStringMelhor($str) {
        return isset($str) && trim($str); //tira os espaços brancos
    }
}

class Usuario {
    use validacao, validacaoMelhor; //usa os metodos sem travar
    
    public function imprimirValorC(){
        echo '<br>', $this->c; //valor privado
    }
}

//var_dump(validacao->validarString(''));

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a,'<br>', $usuario->b;
echo $usuario->imprimirValorC();

//É COLOCADO DENTRO DE UMA CLASSE SEM O USO DE HERANÇA
//TORNA FLEXIVEL