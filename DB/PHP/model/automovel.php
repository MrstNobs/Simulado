<?php

    class Automovel {

        public function selectAllAutomovel() {

            try {
                $sql = "SELECT * FROM automoveis";
                $stmt = Conexao::getConexao()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $result;
            } catch (Exception $ex) {
                die("Erro ao tentar listar todos os automoveis: ". $ex->getMessage());
                return false;
            }
        }

        public function createAutomovel($modelo, $preco) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "INSERT INTO automoveis (modelo, preco) VALUES (:modelo, :preco)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':modelo', $modelo);
                $stmt->bindParam(':preco', $preco);
                $stmt->execute();
            } catch(Exception $ex) {
                die('Erro Ao Criar Um Automovel. <br>' . $ex->getMessage());
                return false;
            }
        }

        public function readAutomovel($id) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "SELECT * FROM automoveis WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();

                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch(Exception $ex) {
                die('Erro Ao Pegar o Automovel> <br>' . $ex->getMessage());
                return false;
            }
        }

        public function updateAutomovel($id, $modelo, $preco) {
            try{
                $pdo = Conexao::getConexao();
                $sql = "UPDATE automoveis SET modelo = :modelo, preco = :preco WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':modelo', $modelo);
                $stmt->bindParam(':preco', $preco);
                $stmt->execute();
            } catch(Exception $ex) {
                die('Erro Ao Tentar Atualizar o Automovel. <br>' . $ex->getMessage());
                return false;
            }
        }

        public function deleteAutomovel($id) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "DELETE FROM automoveis WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            } catch(Exception $ex) {
                die('Erro Ao Tentar Excluir o Automovel. <br>' . $ex->getMessage());
                return false;
            }
        }

        public function lastAutomovel($id) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "SELECT * FROM automoveis ORDER BY id DESC LIMIT 1";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            } catch(Exception $ex) {
                die('Erro ao Tentar Pegar o Ultimo Registro da Tabela Automovel. <br>' . $ex->getMessage());
                return false;
            }
        }
    }
?>