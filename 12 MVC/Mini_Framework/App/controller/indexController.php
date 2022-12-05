<?php

    namespace App\Controllers;

    class indexController {

        private $view;

        public function __construct(){
            $this->$view = new \stdClass();
        }

        public function index() {
            $this->$view->$dados = array('Sofá', 'Cadeira', 'Cama');  // para Simular um dado vindo do Model
            $this->render('index');
        }

        public function sobreNos(){
            $this->$view->$dados = array('Notebook', 'Smartphone');   // para Simular um dado vindo do Model
            $this->render('sobreNos');
        }

        public function render($view) {
            $classAtual = get_class($this);
            $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
            $classAtual = strtolower(str_replace('Controller', '', $classAtual));
            require_once "../View/".$classAtual."/".$view.".phtml";
        }
    }

?>
