<?php

    // DEFINIÇÃO DAS CLASSES DA APLICAÇÃO:

    // Classe Dashboard

    class Dashboard {

        public $dataInicio;
        public $dataFim;
        public $numeroVendas;
        public $totalVendas;

        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr, $value){
            $this->$attr = $value;
            return $this;
        }

    }


    // Classe de conexão com o Banco de Dados:

    class Conexao {

        private $host = 'localhost';
        private $dbname = 'dashboard';
        private $user = 'root';
        private $pass = '';

        public function conectar() {

            try {

                $conexao = new PDO(

                    "mysql:host=$this->host; dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"

                );

                //  padronizar o charset:
                // $conexao->exec('set charset set utf8');

                return $conexao;

            } catch (PDOException $e){
                echo '<p>'.$e->getMessage().'</p>';
            }

        }

    }

    // Classe (model)

    class Bd {

        private $conexao;
        private $dashboard;

        public function __construct(Conexao $conexao, Dashboard $dashboard) {
            $this->conexao = $conexao->conectar();
            $this->dashboard = $dashboard;
        }

        public function getNumeroVendas(){
            $query = 'select count(*) as numero_vendas from tb_vendas where data_venda between :data_inicio and :data_fim';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
            $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
        }

        public function getTotalVendas(){
            $query = 'select sum(total) as total_vendas from tb_vendas where data_venda between :data_inicio and :data_fim';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
            $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
        }
    }


    // LÓGICA DO SCRIPT:

    //Instanciando as classes:
    $dashboard = new Dashboard();
    $conexao = new Conexao();


    // Inserindo valores
    $dashboard->__set('data_inicio', '2018-08-01');
    $dashboard->__set('data_fim', '2018-08-31');
    $bd = new Bd($conexao, $dashboard);

    $dashboard->__set('numeroVendas', $bd->getNumeroVendas());
    $dashboard->__set('totalVendas', $bd->getTotalVendas());
    print_r($dashboard);
?>
