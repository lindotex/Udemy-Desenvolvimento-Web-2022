<?php

    namespace App\Controllers;

    use MF\Controller\Action;

    class indexController extends Action {

        public function index() {
            $this->$view->$dados = array('Sofá', 'Cadeira', 'Cama');  // para Simular um dado vindo do Model
            $this->render('index','layout1');
        }

        public function sobreNos(){
            $this->$view->$dados = array('Notebook', 'Smartphone');   // para Simular um dado vindo do Model
            $this->render('sobreNos','layout2');
        }
    }

?>
