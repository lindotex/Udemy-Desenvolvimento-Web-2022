<?php

    namespace App\Controllers;

    // Recursos do Mini Framework
    use MF\Controller\Action;
    use MF\Model\Container;
    // Os Models
    use App\Models\Produto;
    use App\Models\Info;

    class indexController extends Action {

        public function index() {
            $produto = Container::getModel('Produto');
            $produto = $produto->getProdutos();
            $this->$view->$dados = $produtos;
            $this->render('index','layout1');
        }

        public function sobreNos(){
            $info = Container::getModel('Info');
            $informacoes = $info->getInfo();
            $this->view->dados = $informacoes;
            $this->render('sobreNos','layout1');
        }
    }

?>
