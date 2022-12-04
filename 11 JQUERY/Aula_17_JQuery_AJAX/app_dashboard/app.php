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
            $query = 'select count(*) as numero_vendas from tb_vendas where data_venda between :dataInicio and :dataFim';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':dataInicio', $this->dashboard->__get('dataInicio'));
            $stmt->bindValue(':dataFim', $this->dashboard->__get('dataFim'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
        }

        public function getTotalVendas(){
            $query = 'select sum(total) as total_vendas from tb_vendas where data_venda between :dataInicio and :dataFim';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':dataInicio', $this->dashboard->__get('dataInicio'));
            $stmt->bindValue(':dataFim', $this->dashboard->__get('dataFim'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
        }
    }


    // LÓGICA DO SCRIPT:

    //Instanciando as classes:
    $dashboard = new Dashboard();
    $conexao = new Conexao();
    $competencia = explode('-', $_GET['competencia']);
    $ano = $competencia[0];
    $mes = $competencia[1];

    $dias_do_mes = cal_days_in_month(CAL_GREGORIAN,$mes,$ano);

    // Inserindo valores
    $dashboard->__set('dataInicio', $ano . '-'.$mes.'-01');
    $dashboard->__set('dataFim', $ano . '-'.$mes.'-'.$dias_do_mes);
    $bd = new Bd($conexao, $dashboard);

    $dashboard->__set('numeroVendas', $bd->getNumeroVendas());
    $dashboard->__set('totalVendas', $bd->getTotalVendas());
    echo json_encode($dashboard);
?>
