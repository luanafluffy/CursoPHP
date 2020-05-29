<div class="titulo">Classe Abstrata</div>

<?php
//Não pode ser instanciada
//Não tem "corpo" = não tem chaves "{}"
abstract class Abstrata {
    public abstract function metodo1();
    protected abstract function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1(){
        echo "Executando método 1<br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    //é necessário implementar ou declarar os metodos da classe abstrata extendida
    public function metodo1() {
        //sobrescreveu o método e...
        echo "Executando método 1 extendido <br>";
        parent::metodo1(); //chamou o metodo da classe pai
    }

    protected function metodo2($parametro) {
        echo "Executando métodos 2, com parametro $parametro<br>";
    }

    public function metodo3() {
        echo "Executando método 3<br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
//$c->metodo2('externo'); -- Fora da classe concreta
$c->metodo3();


echo 'Fim!';
var_dump($c instanceof Concreta);
var_dump($c instanceof FilhaAbstrata);
var_dump($c instanceof Abstrata);

//É possível aumentar o nível de visibilidade
// protected -> public
// Só nao pode de protected -> private