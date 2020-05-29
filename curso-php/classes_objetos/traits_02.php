<div class="titulo">Traits #02</div>

<?php
//Resolvendo conflitos de nomes de metodos iguais
trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor {
        //Use do trait 'validacaoMelhor' o método validarString ao invés do validacao
        validacaoMelhor::validarString insteadOf validacao; 
        // validacao::validarString insteadOf validacaoMelhor; 

        //Mudar nome da função
        validacao::validarString as validacaoSimples;

        //Não é suficiente mudar o nome do método, é preciso indicar qual será o metodo usado, e 
        // caso deseje usar o metodo descartado, é necessário renomea-lo
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));