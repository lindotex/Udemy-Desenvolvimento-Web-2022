<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

        print_r($_POST);

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';


        try {
            //Sujeitas a injeção de SQL
            $conexao = new PDO($dsn, $usuario , $senha);
            $query = "SELECT * FROM tb_usuarios where ";
            $query .= " email = :usuario";
            $query .= " AND senha = :senha";

            //Tirando Vulnerabilidades com o prepare() :: IMPEDINDO A INJEÇÂO SQL VIA FRONT END!!!!

            $stmt = $conexao->prepare($query); // Retorna um PDOStatement mas não executa a $query imediatamente.

            $stmt->bindValue(':usuario',$_POST['usuario']); // Preparando USUARIO PARA EXECUÇÃO
            $stmt->bindValue(':senha',$_POST['senha']);     // Preparando SENHA PARA EXECUÇÃO

            $stmt->execute(); // Executando a POSTagem para o Banco de dados, depois de ter sido tratado pelo BindValue()

            $usuario = $stmt->fetch();

            echo '<pre>';
            print_r($usuario);
            echo '</pre>';

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
