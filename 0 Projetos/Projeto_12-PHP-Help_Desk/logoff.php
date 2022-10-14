<?php

    session_start();
    session_destroy();
    header('Location: index.php');



    // echo '<pre>';
    // print_r($_SESSION);
    // echo '<pre/>';

    // //remover indices do array de sessão
    // //unset() - Remove indices de Arrays

    // unset($_SESSION['x']); // remove, se existir.

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '<pre/>';


    // //destruir a variavel de sessão
    // //session_destroy() - Remove todos os itens da Sessions

    // session_destroy(); // sera removida na proxima
    // //forçar um redirecionamento


    // echo '<pre>';
    // print_r($_SESSION);
    // echo '<pre/>';
    ?>
