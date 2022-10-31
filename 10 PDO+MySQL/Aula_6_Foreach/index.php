<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';


    try {
        $conexao = new PDO($dsn, $usuario , $senha);


        // Consultas de muitos itens ao mesmo tempo
        $query = 'select * from tb_usuarios';

        $stmt = $conexao->query($query);

        // Modo 2 => Query on the run

        foreach($conexao->query($query) as $key => $value) {
            print_r($value);
            echo '<hr/>';
        };

        // Modo 1 => Consultando com Foreach

        $lista_usuarios = $stmt-> fetchAll(PDO::FETCH_ASSOC);
        foreach($lista_usuarios as $key => $value) {
            print_r($value);
            echo $value['nome'];
            echo '<hr/>';
        };





        } catch (PDOException $e) {
        echo 'Erro: ' . $e->getCode(). ' Mensagem: ' . $e->getMessage();

    }

?>
