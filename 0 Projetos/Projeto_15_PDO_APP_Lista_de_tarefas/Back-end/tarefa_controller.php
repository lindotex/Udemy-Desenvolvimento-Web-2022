<?php
    require '../Back-end/tarefa.model.php';
    require '../Back-end//tarefa.service.php';
    require '../Back-end/conexao.php';

    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();

?>
