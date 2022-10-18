<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO Atributos E Metodos Estaticos</title>
</head>
<body>
    <!--
        OO_Atributos E Metodos Estaticos:
        Atrubutos que podem ser usados fora do contexto das classes.
        Não é preciso instanciar o objeto para requisitar nem o atributo nem o método do objeto, quando este é definido como estático.


    -->

    <h2>OO Atributos E Metodos Estaticos</h2>

    <?php

    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estático'; // Static: não permite ser utilizado o operador '->'
        public $atributo2 = 'Eu sou um atributo Normal';

        public static function metodo1(){ // Não permite utilizar o operador '$this'.
            // $this->atributo2; //Vai dar erro, pois o objeto nao foi instanciado ainda!!!
            echo 'Eu sou um método Estático.';
        }

        public function metodo2(){
            echo 'Eu sou um método Normal.';
        }

    }

    $x = new Exemplo();

    echo Exemplo::$atributo1; // Operador de Resolução de escopo "::",chamando o Atributo sem instanciar o Objeto.

    echo '<br/>';

    echo Exemplo::metodo1(); // Operador de Resolução de escopo "::", chamando o Atributo sem instanciar o Objeto.

    echo '<br/>';
    echo '<br/>';

    echo $x->atributo1; // Não aceita o '->'; vai dar erro na tela.
    echo '<br/>';
    echo $x->atributo2;

    echo '<br/>';
    echo '<br/>';



    ?>


<body/>

</html>

