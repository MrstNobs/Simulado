<?php

use PSpell\Config;

    class Concessionaria {

        public function selectAllConcessionaria(){

            try {
                $sql = "SELECT * FROM concessionarias";
                $stmt = Conexao::getConexao()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
            } catch(Exception $ex) {
                die("Erro ao tentar listar todas as concessionarias: ". $ex->getMessage());
                return false;
            }
        }

        public function createConcessionaria($concessionaria) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "INSERT INTO concessionarias (concessionaria) VALUES (:concessionaria)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':concessionaria', $concessionaria);
                $stmt->execute();
                return 'Concessionaria Criada com sucesso.';
            } catch(PDOException $ex) {
                if($ex->errorInfo[1]==1062){
                    return 'Concessionaria já cadastrada.';
                } else {
                    return 'Erro ao cadastrar a Concessionaria. <br>' . $ex->getMessage();
                }
            }
        }

        public function readConcesisonaria($id) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "SELECT * FROM concessionarias WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch(Exception $ex) {
                die('Erro ao Tentar Pegar o Registro da Concessionaria. <br>' . $ex->getMessage());
                return false;
            }
        }

        public function updateConcessionaria($id, $concessionaria) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "UPDATE concessionarias SET concessionaria = :concessionaria WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':concessionaria', $concessionaria);
                $stmt->execute();
                return 'Registro da Concessionaria Atualizado com Sucesso.';
            } catch(Exception $ex) {
                die('Erro ao Atualizar o Registro da Concessionaria. <br>'. $ex->getMessage());
                return false;
            }
        }

        public function deleteConcessionaria($id) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "DELETE FROM concessionarias WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                return 'Registro da Concessionaria Deletado com Sucesso.';
            } catch(Exception $ex) {
                die('Eror ao Tentar Deletar o Registro da Concessionaria. <br>' . $ex->getMessage());
            }
        }

        public function lastConcessionaria($id) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "SELECT * FROM concessionarias ORDER BY id DESC LIMIT 1";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                return 'Ultimo Registro da Concessioaria Pego com Sucesso.';
            } catch(Exception $ex) {
                die('Erro ao Tentar Pegar o Ultimo Registro da Concessionaria. <br>' . $ex->getMessage());
            }
        }
    }
?>