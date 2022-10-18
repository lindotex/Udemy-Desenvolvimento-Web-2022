<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO_Encapsulamento</title>
</head>
<body>
    <!--
        Pilar do Encapsulamento:
        Proteção dos dados, classificando os tipos de dados (publicos, protegidos e privados)
        1 - Segurança da informação.

    -->

    <h2>OO_Encapsulamento</h2>

    <?php

        class Pai
        {
            // Atributos : PAI

            private $nome = 'Jorge';
            protected $sobrenome = 'Silva';
            public $humor = 'Feliz';


            //Métodos : Pai

            public function __get($attr)
            {
                return $this->$attr;
            }

            public function __set($attr, $value)
            {
                $this->$attr = $value;
            }

            private function executarMania()
            {
                echo 'Assobiar!';
            }

            protected function responder()
            {
                echo 'OI!';
            }

            public function executarAcao()
            {
                $this->executarMania() . '<br/>';
                echo 'Assobiou ao Filho';
            }


        }


        $pai = new Pai();

        // Impressão do Objeto no DOM
            echo '<hr/>';
            echo 'Impressão do Objeto PAI Completo:' . '<br/>';
            echo '<pre>';
            print_r($pai);
            echo '<pre/>';
        // Impressão do Objeto no DOM

        // ATRIBUTO PÚBLICO - Pode ser exibido e modificado.
            echo '<hr/>';
            echo 'Atributos Públicos:' . '<br/>';
            echo $pai->humor;
        // ATRIBUTO PÚBLICO - Pode ser exibido e modificado.


        // USANDO GETTER E SETTER
            echo '<hr/>';
            echo 'Usando Getter e Setter:' . '<br/>';
            echo $pai->nome = 'Alisson'; // consigo imprimir e alterar valores privados com o uso implicito do get e set.
        // USANDO GETTER E SETTER

        // Chamando Métodos Privados
            echo '<hr/>';
            echo $pai->executarAcao();
        // Chamando Métodos Privados





        class Filho extends Pai
        {
            // Atributos : Filho
            private $nome = 'Lucas';
            private $idade = 14;

            public function __get($attr)
            {
                return $this->$attr;
            }

            public function __set($attr, $value)
            {
                $this->$attr = $value;
            }

            public function getAtributo($attr)
            {
                return $this->$attr;
            }

            public function setAtributo($attr, $value)
            {
                $this->$attr = $value;
            }

            public function executarAcao()
            {
                $this->executarMania() . '<br/>';
                echo 'Assobiou ao Pai';
            }

        }

        $filho = new Filho();

        // Impressão do Objeto no DOM
            echo '<hr/>';
            echo 'Impressão do Objeto FILHO Completo:' . '<br/>';
            echo '<pre>';
            print_r($filho);
            echo '<pre/>';

            echo 'Impressão do Humor FILHO:' . '<br/>';
            echo $filho->getAtributo('humor') . '<br/>';
            echo 'Impressão do Humor modificado FILHO:' . '<br/>';
            echo $filho->setAtributo('humor','Triste');
            echo $filho->getAtributo('humor') . '<br/>';

            echo '<br/>';

            echo 'Impressão do Nome FILHO:' . '<br/>';
            echo $filho->getAtributo('nome') . '<br/>';
            echo 'Impressão do Nome modificado FILHO:' . '<br/>';
            echo $filho->setAtributo('nome','Lucas');
            echo $filho->getAtributo('nome') . '<br/>';

            // Impressão do Objeto no DOM

        // Impressão das Classes do Objeto - get_class_methods()
        echo '<pre>';
        print_r(get_class_methods($filho));
        echo '<pre/>';
        // Impressão das Classes do Objeto - get_class_methods()

        echo '<hr/>';

        echo 'Impressão do Objeto PAI Completo:' . '<br/>';
        echo '<pre>';
        print_r($pai);
        echo '<pre/>';
        echo '<br/>';

        echo $pai->executarAcao();

        echo '<br/>';
        echo '<br/>';

        echo 'Impressão do Objeto FILHO Completo:' . '<br/>';
        echo '<pre>';
        print_r($filho);
        echo '<pre/>';
        echo '<br/>';
        echo $filho->executarAcao();

    ?>


<body/>

</html>

