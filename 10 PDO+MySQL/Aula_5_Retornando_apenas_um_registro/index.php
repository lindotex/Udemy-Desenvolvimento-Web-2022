<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';


    try {
        $conexao = new PDO($dsn, $usuario , $senha);


        // Consultas de muitos itens ao mesmo tempo
        $query = 'select * from tb_usuarios';

        $stmt = $conexao->query($query); //Retorna um PDOStatement

        $lista = $stmt-> fetchAll(PDO::FETCH_ASSOC); // Retorna o PDOStatemento apenas com os arrays associativos.
        $lista = $stmt-> fetchAll(PDO::FETCH_NUM); // Retorna o PDOStatemento apenas com os arrays numericos.
        $lista = $stmt-> fetchAll(PDO::FETCH_BOTH); // Retorna o PDOStatemento apenas com os arrays com todos.
        $lista = $stmt-> fetchAll(PDO::FETCH_OBJ); // Retorna o PDOStatemento com formato de OBJETO.

        echo '<pre>';
        print_r($lista);
        echo '</pre>';


        // Consultas de apenas um item (usuario)
        $query = 'select * from tb_usuarios where id = 6';

        $stmt = $conexao->query($query); //Retorna um PDOStatement

        $usuario = $stmt-> fetch(PDO::FETCH_OBJ); // Retorna o PDOStatemento de apenas uma propriedade de um item

        echo '<pre>';
        print_r($usuario);
        echo '</pre>';
        echo $usuario->nome;        // para FETCH_OBJ   :: Objeto
        echo $usuario['nome'];      // para FETCH_ASSOC :: Array

        } catch (PDOException $e) {
        echo 'Erro: ' . $e->getCode(). ' Mensagem: ' . $e->getMessage();

    }

?>
