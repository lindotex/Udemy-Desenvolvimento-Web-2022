<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tratamento_de_erros</title>
</head>
<body>
    <!--
        OO_Interfaces:
        Interfaces servem para declarar métodos comuns em diversas classes.


    -->

    <h2>Tratamento de erros</h2>

    <?php
    // Global
        // Classes em conflitos, devido aos nomes e métodos >>>
        // Namespace para resolver conflito de classes
    // Global /

    echo '<h3>Exemplo :</h3>';

    try { // TENTE : Encapsula todo conteudo sucetivel a erro.

        echo '<h3> *** Try ***</h3>';

        $sql = 'select from clientes';
        mysql_query($sql); //Vai dar Erro.

    } catch (Error $e) { //captura o erro, pra executar uma tratativa
        echo '<h3> *** Catch ***</h3>';
        echo '<p style="color: red">' . $e . '</p>';
    } finally { // Segue após a tentativa e o erro.
         echo '<h3> *** Finally *** </h3>';
    }



    ?>


<body/>

</html>

