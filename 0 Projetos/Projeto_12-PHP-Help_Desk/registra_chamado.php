<?php

    session_start();
    // Montagem do texto:
    $titulo = str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $descricao = str_replace('#','-',$_POST['descricao']);

    $texto = $_SESSION['id'] . '#' .$titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //abrindo arquivo para escrever o texto:
    $arquivo = fopen('arquivo.hd','a');

    //escrever dentro do arquivo:
    fwrite($arquivo, $texto);

    //fechando o arquivo:
    fclose($arquivo);

    header('Location: abrir_chamado.php');


?>
