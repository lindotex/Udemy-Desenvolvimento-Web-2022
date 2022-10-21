<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erros Customizados</title>
</head>
<body>
    <!--
        OO_Interfaces:
        Interfaces servem para declarar métodos comuns em diversas classes.


    -->

    <h2>Erros Customizados</h2>

    <?php
    class MinhaExceptionCustomizada extends Exception {
        private $erro = '';

        public function __construct($erro)
        {
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada(){
            echo '<div style="border: 1px solid #000; padding: 15px; background-color: red; color: white">';
            echo $this->erro;
            echo '</div>';
        }
    }

    try{
        throw new MinhaExceptionCustomizada('Esse é um erro de teste.');

        // Error (php) - Geralmente não utilizada no dia a dia
        // Exceptions (programadores) - Definidas pelos programadores.
        // Customizadas (programadores) - Personalizados

    } catch(MinhaExceptionCustomizada $e) {
        $e->exibirMensagemErroCustomizada();
    }
    ?>


<body/>

</html>

