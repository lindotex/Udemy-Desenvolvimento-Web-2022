<?php

    session_start();

    print_r($_SESSION);
    echo "<hr/>";

    //Autenticação

    $usuario_autenticado = false;


    //Usuarios do Sistema

    $usuarios_app = array(
        array('email' => 'adm@test.com', 'senha' => 'qwer1234'),
        array('email' => 'user@test.com', 'senha' => 'qwer1234'),
    );

    foreach($usuarios_app as $user) {
        echo 'Usuario App: ' . $user['email'] . ' / ' . $user['senha'];
        echo '<br/>';
        echo 'Usuario App: ' . $_POST['email'] . ' / ' . $_POST['senha'];
        echo '<hr/>';

        if($user['email'] == $_POST['email'] || $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    };

    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');

    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro'); //Volta para a pag. inicial.
    };


    // echo '<pre/>';
    // print_r($usuarios_app);

    // print_r($_POST);


?>
