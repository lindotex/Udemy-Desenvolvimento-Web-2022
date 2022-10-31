<?php
    class Tarefa {
        private $id;
        private $id_status;
        private $tarefa;
        private $data_cadastro;

        public function __get($atribute)
        {
            return $this->$atribute;
        }

        public function __set($atribute, $value)
        {
            $this->$atribute = $value;
        }
    }
?>
