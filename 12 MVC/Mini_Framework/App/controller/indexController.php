<?php

    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Produto;

    class indexController extends Action {

        public function index() {

            // Instancia de conexão com BD
                $conn = Connection:getDb();
            // Instancia de Modelo
                $produto = new Produto($conn);

                $produto = $produto->getProdutos();

                $this->$view->$dados = $produtos;

            $this->render('index','layout1');
        }

        public function sobreNos(){

            $this->render('sobreNos','layout1');
        }
    }

?>
