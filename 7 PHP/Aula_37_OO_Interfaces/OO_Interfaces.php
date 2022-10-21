<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO_Interfaces</title>
</head>
<body>
    <!--
        OO_Interfaces:
        Interfaces servem para declarar métodos comuns em diversas classes.


    -->

    <h2>OO_Interfaces</h2>

    <?php

    echo '<h3>Exemplo 1:: Geladeira e TV.</h3>';

    interface EquipamentoEletronicoInterface {

        // Métodos comuns

        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface {

        //Metodo Unico

        public function abrirPorta(){
            echo 'Geladeira: Abrir porta';
            echo '<br/>';
        }

        // Metodo da Interface Eletronico

        public function ligar(){
            echo 'Geladeira: Ligar';
            echo '<br/>';
        }

        public function desligar(){
            echo 'Geladeira: Desligar ';
            echo '<br/>';
        }
    }

    class TV implements EquipamentoEletronicoInterface {

        //Metodo Unico
        public function trocarCanal(){
            echo 'TV: Trocado Canal';
            echo '<br/>';
        }

        // Metodo da Interface Eletronico

        public function ligar(){
            echo 'TV: Ligar';
            echo '<br/>';
        }

        public function desligar(){
            echo 'TV: Desligar';
            echo '<br/>';
        }
    }

    $x = new Geladeira();
    $y = new TV();

    echo '<h5>Instanciando Geladeira e seus métodos:</h5>';
    echo $x->abrirPorta();
    echo $x->ligar();
    echo $x->desligar();

    echo '<h5>Instanciando TV e seus métodos:</h5>';
    echo $y->trocarCanal();
    echo $y->ligar();
    echo $y->desligar();
    echo '<br/>';
    echo '<hr/>';

    /* ----------- Outro Exemplo -------------------------*/

    echo '<h3>Exemplo 2:: Animais.</h3>';
    echo '<br/>';

    interface mamiferoInterface {
        //Metodos>
        public function respirar();
    }

    interface terrestreInterface {
        //Metodos>
        public function andar();
    }

    interface aquaticoInterface {
        //Metodos>
        public function nadar();
    }

    class Humano implements terrestreInterface, mamiferoInterface {

        // Metodos Implementados
        public function andar() {
            echo 'Humano Andando';
            echo '<br/>';
        }

        public function conversar() {
            echo 'Humano Conversando';
            echo '<br/>';
        }

        //Metodos Implementados de Mamiferos
        public function respirar(){
            echo 'Humano Respirando';
            echo '<br/>';
        }
    }

    class Baleia implements mamiferoInterface, aquaticoInterface {

        //Metodos Implementados de Mamiferos
        public function respirar(){
            echo 'Baleia Respirou';
            echo '<br/>';
        }

        //Metodos Implementados de Aquaticos
        public function nadar() {
            echo 'Baleia Nadou';
            echo '<br/>';
        }

        // Metodo Único

        Public function esguichar() {
            echo 'Baleia Esguichou';
            echo '<br/>';
        }

    }

    $a = new Humano();
    $b = new Baleia();

    echo '<h5>Instanciando Humano e seus métodos:</h5>';
    echo $a->andar();
    echo $a->conversar();
    echo $a->respirar();

    echo '<h5>Instanciando Baleia e seus métodos:</h5>';
    echo $b->respirar();
    echo $b->nadar();
    echo $b->esguichar();
    echo '<br/>';
    echo '<hr/>';

    /* ----------- Outro Exemplo -------------------------*/
    /* ----------- Extendendo Interfaces------------------*/
    echo '<h3>Exemplo 3:: Extendendo as Interfaces.</h3>';
    echo '<br/>';

    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface { // extendendo a Interface Animal em Aves
        public function voar();
    }

    class Papagaio implements AveInterface {

        //Método de Ave
        public function voar() {
            echo 'Papagaio Voou';
            echo '<br/>';
        }

        //Método de Animal
        Public function comer(){
            echo 'Papagaio Comeu';
            echo '<br/>';
        }
    }

    $c = new Papagaio();

    echo '<h5>Instanciando Humano e seus métodos:</h5>';
    echo $c->voar();
    echo $c->comer();
    echo '<br/>';
    echo '<hr/>';


    ?>


<body/>

</html>

