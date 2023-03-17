<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';


    try {
        $conexao = new PDO($dsn, $usuario , $senha);

        $query = '
            select * from tb_usuarios
        ';

        $stmt = $conexao->query($query); //Retorna um PDOStatement
        $lista = $stmt-> fetchAll(PDO::FETCH_ASSOC); // Retorna o PDOStatemento apenas com os arrays associativos.
        $lista = $stmt-> fetchAll(PDO::FETCH_NUM); // Retorna o PDOStatemento apenas com os arrays numericos.
        $lista = $stmt-> fetchAll(PDO::FETCH_BOTH); // Retorna o PDOStatemento apenas com os arrays com todos.
        $lista = $stmt-> fetchAll(PDO::FETCH_OBJ); // Retorna o PDOStatemento com formato de OBJETO.

        echo $retorno;

        } catch (PDOException $e) {
        echo 'Erro: ' . $e->getCode(). ' Mensagem: ' . $e->getMessage();

    }

?>
