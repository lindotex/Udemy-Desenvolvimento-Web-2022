<?php
    class Conexao{

        private $host = 'localhost';
        private $dbname = 'php_com_pdo';
        private $user = 'root';
        private $password = '';

        public function conectar(){
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",  // Usuario
                    "$this->pass"   // Password
                );

                return $conexao;

            } catch(PDOException $e) {
                echo '<p>'. $e->getMessage().'</p>';
            }
        }
    }
?>
