<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes_nativas_datas</title>
</head>
    <h2>Funcoes_nativas_datas</h2>

    <div>

    </div>

    <?php

        // date($data) = Recupera a data atual;
        // date_default_timezone_get($timezone) = Recuperar o timezone default da aplicação;
        // date_default_timezone_set($timezone) = Atualizar o timezone default da aplicação;
        // strtotime($data) = Transformar datas textuais em segundos;


        //Data atual
        echo date('D d, M, Y. H:i.'); // Ver na DOC PHP os tokens (letras).
        echo '<br/>';

        //Timezone atual:
        echo date_default_timezone_get();
        echo '<br/>';

        //Timezone set:
        date_default_timezone_set('Europe/Paris');
        echo '<br/>';

        //Timezone atual:
        echo date('D d, M, Y. H:i.'); // Ver na DOC PHP os tokens (letras).
        echo '<br/>';
        echo date_default_timezone_get();
        echo '<br/>';

        //strtotime:
        $data_inicial = '2018-04-24'; //Data em String
        $data_final = '2018-05-15'; //Data em String

        $time_inicial = strtotime($data_inicial); //Data em String > Data
        $time_final = strtotime($data_final); //Data em String > Data

        echo '<br/>';
        echo ($time_final - $time_inicial ) . ' Segundos';
        echo '<br/>';
        echo ($time_final - $time_inicial )/86400 . ' dias';
        echo '<br/>';




        ?>


<body>


</body>
</html>

