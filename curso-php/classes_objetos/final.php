<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2() {
        echo 'Não vou mudar!<br>';
    }
}

class Classe extends Abstrata {
    public function metodo1() {
       echo 'Executando o método 1!<br>';
    }
    //Não pode ser alterado um método final herdado
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

//Não é possivel gerar uma herança a partir de uma classe final
final class Unica {
    public $attr = 'Valor unico!';
}

//Pode instanciar uma classe final sim
$unica = new Unica();
echo $unica->attr;

// class Duplicata extends Unica {
//     public $att2
// }


//Em geral, 'final'
// garante que o metodo não pode ser sobrescrito, sem redefinição
// uma classe final não pode ter heranças