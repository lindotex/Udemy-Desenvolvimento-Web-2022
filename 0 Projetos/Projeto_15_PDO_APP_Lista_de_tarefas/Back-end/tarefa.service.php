<?php
    //CRUD
    class TarefaService {

        public $conexao;
        public $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa)
        {
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        public function inserir(){ // CREATE
            $query = 'INSERT INTO tb_tarefas(tarefa) VALUES(:tarefa)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
        }
        public function recuperar(){ // READ

        }
        public function atualizar(){ // UPDATE

        }
        public function remover(){ // DELETE

        }
    }
?>
