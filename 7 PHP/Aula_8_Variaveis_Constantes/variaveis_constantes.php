<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Constantes</title>
</head>
    <?php

        //Variáveis constantes.
        //Exempos de Uso:
        //Ambientes de Desenvolvimento
            // $BD_URL (endereco_do_usuario);
            // $BD_USUARIO (usuario_dev);
            // $BD_SENHA (senha_dev);

        //Ambientes de Produção
            // $BD_URL (endereco_bd_prod);
            // $BD_USUARIO (usuario_prod);
            // $BD_SENHA (senha_prod);

        // Exemplo prático:
        // utilizamos a função define() para inserir uma constante.
        // Define espera dois parametros:
        //  1 : Nome da Variavel
        //  2 : valor
        // CONSTANTES SÃO DECLARADAS EM CAPS POR CONVENÇÃO!!!!!!

        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        /* --- Lógica --- */

        echo BD_URL . '<br>';
        echo BD_USUARIO . '<br>';
        echo BD_SENHA . '<br>';


    ?>

<body>


</body>
</html>

