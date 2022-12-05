<?php

    namespace App\Models;

    class Info {
        protected $db;

        public function __constructor(\PDO $db) {
            $this->db = $db;
        }

        public function getInfo(){
            $query = "select titulo, descricao from tb_info";
            return $this->db->query($query)->fetchAll();
        }
    }

?>
