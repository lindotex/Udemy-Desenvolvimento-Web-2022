<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

        print_r($_POST);

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';


        try {
            $conexao = new PDO($dsn, $usuario , $senha);

            $query = "SELECT * FROM tb_usuarios WHERE ";
            $query .= " email = '{$_POST['usuario']}' ";
            $query .= " AND senha = '{$_POST['senha']}' ";

            echo $query;

            $stmt = $conexao->$query($query);
            $usuario = $stmt->fetch();

            print_r($usuario);

            } catch (PDOException $e) {
            echo 'Erro: ' . $e->getCode(). ' Mensagem: ' . $e->getMessage();
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            <input type="text" name="login" id="login" placeholder="Usuario">
            <input type="password" name="password" id="password" placeholder="Senha">
            <button type="submit" id="submit">Entrar</button>
        </form>
    </body>
</html>
