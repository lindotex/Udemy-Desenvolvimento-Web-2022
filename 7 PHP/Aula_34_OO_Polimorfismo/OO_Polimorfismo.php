<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO_Polimorfismo</title>
</head>
    <h2>OO_Polimorfismo</h2>

    <!--
        Pilar do Polimorfismo:
        subscrição de métodos importados dos Parents nos Childrens
        1 - Sobrescrita de Métodos.

    -->

    <?php

    class Veiculo { // Class Parent

        // Atributos:
        public $placa = null;
        public $cor = null;

        // Métodos:

        function acelerar()
        {
            echo $this->classe .' acelerou!' . '<br/>';
        }

        function freiar()
        {
            echo $this->classe .' Freiou!' . '<br/>';
        }

        function trocarMarcha()
        {
            echo $this->classe .' desengatou embreagem com o pé e com a mão trocou de Marcha!' . '<br/>';
        }
    }


    class Carro extends Veiculo {   // extends: Class Children

        // Atributos:
        // public $placa = 'ABC1234';
        // public $cor = 'Branco';
        public $classe = 'Carro';
        public $teto_solar = true;

        // Métodos:

        // function acelerar()
        // {
            //     echo 'Veículo acelerou!';
            // }

            function __construct($placa, $cor)
            {
                $this->placa = $placa;
                $this->cor = $cor;
            }

            function abrirTetoSolar()
            {
                echo $this->classe . ' abriu o teto solar!' . '<br/>';
            }

        function alterarPosicaoVolante()
        {
            echo 'Alterada a Posição do volante no ' . $this->classe . '!' . '<br/>';
        }


    }

    class Moto extends Veiculo {

        // Atributos:
        // public $placa = 'XYZ9876';
        // public $cor = 'Preto';
        public $classe = 'Moto';
        public $contra_peso_guidao = true;


        // Métodos:

        // function acelerar()
        // {
        //     echo 'Veículo acelerou!';
        // }


        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }
        function empinar()
        {
            echo $this->classe . ' empinada com sucesso!' . '<br/>';
        }

        // POLIMORFISMO : Sobrescrita de Métodos trocarMarcha()
        function trocarMarcha()
        {
            echo $this->classe .' desengatou embreagem com a mão e com o pé trocou de Marcha!' . '<br/>';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('XYZ9876', 'Preto');

    $carro->trocarMarcha();
    $moto->trocarMarcha(); // POLIMORFISMO : Sobrescrita de Métodos.



    ?>


<body>

</body>
</html>

