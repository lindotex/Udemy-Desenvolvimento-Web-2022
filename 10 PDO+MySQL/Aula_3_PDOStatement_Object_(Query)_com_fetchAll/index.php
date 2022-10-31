<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';


    try {
        $conexao = new PDO($dsn, $usuario , $senha);

        $query = '
            select * from tb_usuarios
        '

        $stmt = $conexao->query($query); //Retorna um PDOStatement
        $lista = $stmt-> fetchAll()


        echo $retorno;

        } catch (PDOException $e) {
        echo 'Erro: ' . $e->getCode(). ' Mensagem: ' . $e->getMessage();

    }

?>
