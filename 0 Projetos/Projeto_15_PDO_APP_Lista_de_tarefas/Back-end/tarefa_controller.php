<?php

	require "../Back-end/tarefa.model.php";
	require "../Back-end/tarefa.service.php";
	require "../Back-end/conexao.php";


	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir' ) {
		$tarefa = new Tarefa();
		$tarefa->__set('tarefa', $_POST['tarefa']);

		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->inserir();

		header('Location: nova_tarefa.php?inclusao=1');

	} else if($acao == 'recuperar') {

        $conexao = new Conexao();
		$tarefa = new Tarefa();

        $tarefaService = new TarefaService($conexao,$tarefa);
        $tarefas = $tarefaService->recuperar();
	}

?>
