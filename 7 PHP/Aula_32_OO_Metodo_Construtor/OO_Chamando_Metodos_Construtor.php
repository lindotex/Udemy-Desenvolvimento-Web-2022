<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO_Chamando_Metodos_Construtor</title>
</head>
    <h2>OO_Chamando_Metodos_Construtor</h2>

    <?php

    //Modelo
    class Pessoa {

        public $nome = null;

        // Constroi o objeto.
        function __construct($nome) // Pode receber diversos parametros.
        {
            echo 'Objeto Iniciado.' . '<br/>';

            $this->nome = $nome;
        }

        //Remove o objeto
        function __destruct()
        {
            echo 'Objeto Removido.' . '<br/>';
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        function correr()
        {
            return $this->__get('nome') . ' está correndo!';
        }
    }

    $pessoa = new Pessoa('Jorge');
    echo 'Nome: ' . $pessoa->__get('nome');
    echo '<br/>';
    echo $pessoa->correr();
    echo '<pre>';
    print_r($pessoa);
    echo '<pre/>';

    // echo $pessoa->__destruct(); // chamando pelo método (não padrão)
    // unset($pessoa);             // Proposital: chamando pela função unset(), que executa o destruct.


    ?>


<body>

</body>
</html>

