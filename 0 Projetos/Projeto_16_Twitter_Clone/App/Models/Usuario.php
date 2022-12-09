<?php
    namespace App\Models;
    use MF\Model\Model;
use PDOStatement;

    class Usuario extends Model {

        // Atributos do Usuario
        private $id;
        private $nome;
        private $email;
        private $senha;

        // Metodos Mágicos para manipulção do Bd

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        //Metodos:
        // Salvar
        public function salvar() {
            $query = "insert into usuarios (nome, email, senha) values (:nome, :email,:senha)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':nome', $this->__get('nome'));
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->bindValue(':senha', $this->__get('senha')); // MD5() - > Hash 32 caracteres (criptografia)
            $stmt->execute();

            return $this;
        }
        // Validar Cadastro
        public function validarCadastro(){
            $valido = true;

            if(strlen($this->__get('nome'))<3){
                $valido = false;
            };
            if(strlen($this->__get('email'))<3){
                $valido = false;
            };
            if(strlen($this->__get('senha'))<3){
                $valido = false;
            };

            return $valido;
        }
        // Recuperar um usuario por e-mail.
        public function getUsuarioPorEmail(){
            $query = "select nome, email from usuarios where email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        public function autenticar() {
            $query = " select id, nome, email from usuarios where email = :email and senha = :senha";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->bindValue(':senha', $this->__get('senha'));
            $stmt->execute();

            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

            if($usuario['id'] != '' && $usuario['nome'] != ''){
                $this->__set('id',$usuario['id']);
                $this->__set('nome',$usuario['nome']);
            }

            return $usuario;
        }
    }
?>