<?php

    session_start();

    print_r($_SESSION);
    echo "<hr/>";

    //Autenticação

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;
    $usuario_email = null;
    $perfis = array(1 => 'Administrativo', 2 => 'usuario');


    //Usuarios do Sistema

    $usuarios_app = array(
        array('id' => 1,'email' => 'adm@test.com', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 2,'email' => 'user@test.com', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 3,'email' => 'jose@test.com', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4,'email' => 'maria@test.com', 'senha' => '1234', 'perfil_id' => 2),
    );

    foreach($usuarios_app as $user) {
        echo 'Usuario App: ' . $user['id'] . $user['email'] . ' / ' . $user['senha'] . $user['perfil_id'];
        echo '<br/>';
        echo 'Usuario App: ' . $_POST['id'] . $_POST['email'] . ' / ' . $_POST['senha']. $_POST['perfil_id'];
        echo '<hr/>';

        if($user['email'] == $_POST['email'] || $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
            $usuario_email = $user['email'];
        }
    };

    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['email'] = $usuario_email;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');

    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro'); //Volta para a pag. inicial.
    };

?>
