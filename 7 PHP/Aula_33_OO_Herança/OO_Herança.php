<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO_Herança</title>
</head>
    <h2>OO_Herança</h2>

    <!--
        Pilar da Herança:
        1 - Reutilizavel,
        2 - Manutenção.

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

    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('XYZ9876', 'Preto');


    echo '<pre>';
    print_r($carro);
    echo '<br/>';
    print_r($moto);
    echo '<pre/>';

    echo '<hr/>';

    $carro->abrirTetoSolar();
    $carro->acelerar();
    $carro->alterarPosicaoVolante();
    $carro->freiar();
    echo '<hr/>';
    $moto->acelerar();
    $moto->empinar();
    $moto->freiar();


    ?>


<body>

</body>
</html>

