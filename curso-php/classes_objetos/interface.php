<div class="titulo">Interface</div>

<?php 
interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal{
    function latir(): string;
    //Não é possivel definir um método privado ou protegido de uma interface
    function correr();
}

interface Felino {
    function correr();
}

class Cachorro implements Canino {
    function respirar(){
        return "Irei usar oxigênio!";
    }
    function latir(): string {
        return 'au au';
    }
    function mamar(){
        return 'Irei Mamar!';
    }

    function correr() {
        return 'vrummmmmmm!';
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->correr(), '<br>';

//Se a interface for extendida, obrigatoriamente a classe que implementa a interface precisa ter todas as interfaces, inclusive as extendidas.
//Uma classe não pode herdar de mais de uma classe

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro); //animal é uma instacia de cachorro?
var_dump($animal instanceof Canino); //animal é Canino?
var_dump($animal instanceof Mamifero); //animal é Mamifero?
var_dump($animal instanceof Animal); //animal é Animal?
var_dump($animal instanceof Felino); //animal é Felino? /NÃO!