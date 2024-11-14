<?php

    class Cliente {

        public function SelectAllCliente() {

            try {
                $sql = "SELECT * FROM cliente";
                $stmt = Conexao::getConexao()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $result;
            }

            catch (Exception $ex) {
                die("Erro ao tentar listar todos os clientes". $ex->getMessage());
                return false;
            }
        }

        public function criaCliente($nome) {
            $pdo = Conexao::getConexao();
            $sql = "INSERT INTO cliente (nome) VALUES (:nome)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->execute();
        }

        public function getCliente($id) {

            $pdo = Conexao::getConexao();

            $sql = "SELECT * FROM cliente WHERE id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function autalizarCliente($id, $nome) {
            $pdo = Conexao::getConexao();

            $sql = "UPDATE cliente SET nome = :nome WHERE id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':id', $id);

            $stmt->execute();
        }

        public function deletarCliente($id) {
            $pdo = Conexao::getConexao();
            
            $sql = "DELETE FROM cliente WHERE id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();
        }

        public function ultimoRegistro() {
            try {
                $pdo = Conexao::getConexao();

                $sql = "SELECT * FROM cliente ORDER BY id DESC LIMIT 1";
                $stmt = $pdo->prepare($sql);

                $stmt->execute();

                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $ex) {
                die("Erro na busca do último registro do banco de dados <br> ". $ex->getMessage());
            }
        }
    }
?>