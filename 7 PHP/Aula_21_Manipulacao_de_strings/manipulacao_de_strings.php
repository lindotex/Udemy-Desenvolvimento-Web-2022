<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulacao de Strings</title>
</head>
    <h2>Manipulacao de Strings</h2>

    <div>

    </div>

    <?php

        $texto = 'alisson cassio fernando emilio. <br/>';

        echo 'Texto impresso: <br/>';
        echo $texto;
        echo '<br/>';


        echo 'Texto strtolower: <br/>';
        echo strtolower($texto);
        echo '<br/>';


        echo 'Texto strtoupper: <br/>';
        echo strtoupper($texto);
        echo '<br/>';


        echo 'Texto ucfirst: <br/>';
        echo ucfirst($texto);
        echo '<br/>';


        echo 'Texto strlen: <br/>';
        echo strlen($texto);
        echo '<br/>';


        echo 'Texto replace: <br/>';
        echo str_replace('alisson', 'adalberto',$texto);
        echo '<br/>';


        echo 'Texto substr: <br/>';
        echo substr($texto,2,10);
        echo '<br/>';




    ?>


<body>


</body>
</html>

