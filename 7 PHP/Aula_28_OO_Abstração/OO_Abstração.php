<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO_Abstração</title>
</head>
    <h2>OO_Abstração</h2>

    <?php

    //Modelo
    class Funcionario {

        //Atributos
        public $nome = 'Alisson';
        public $telefone = '22 9 9900 3693.';
        public $numFilhos = '2';

        //Métodos
        function resumirCadFunc() {
            return "$this->nome  possui $this->numFilhos Filhos, seu contato é $this->telefone";
        }

        function modificarNumFilhos($numFilhos) {
            // Afetar o atributo 'numFilhos' do objeto.

            $this->numFilhos = $numFilhos;

            return 'Alterado o número de filhos do funcionário.';
        }

        function modificarContato($telefone){
            //Alterar o contato do Funcionário.
            $this->telefone = $telefone;

            return 'Alterado o número de telefone do funcionário.';
        }
    }

    $funcionario = new Funcionario();
    echo $funcionario->resumirCadFunc();
    echo '<br/>';
    echo '<br/>';
    echo $funcionario->modificarNumFilhos(3);
    echo '<br/>';
    echo $funcionario->resumirCadFunc();
    echo '<br/>';
    echo '<br/>';
    echo $funcionario->modificarContato('22 2760 9347');
    echo '<br/>';
    echo $funcionario->resumirCadFunc();
    echo '<hr/>';

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '<br/>';
    echo $x->modificarNumFilhos(3);
    echo '<br/>';
    echo $x->resumirCadFunc();

    ?>


<body>


</body>
</html>

