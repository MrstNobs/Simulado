<?php
    class Alocacao {
        public function selectAllAlocacao() {
            try {
                $sql = "SELECT * FROM alocacao";
                $stmt = Conexao::getConexao()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } catch(Exception $ex) {
                die("Erro ao listar todas as alocações: ". $ex->getMessage());
                return false;
            }
        }

        public function SelectArea($area){
            try{
                $pdo = Conexao::getConexao();
                $sql = "SELECT * FROM alocacao WHERE area = :area";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':area', $area);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC); 
            } catch(Exception $ex) {
                die('Erro ao tentar pegar a o registro da area. '. $ex->getMessage());
                return false;
            }
        }

        public function BuscaRelacionada($area) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "SELECT alocacao.area, 
                alocacao.id AS alocacao_id, 
                automoveis.modelo,
                automoveis.preco,
                automoveis.id FROM alocacao INNER JOIN automoveis ON alocacao.automovel = automoveis.id
                WHERE alocacao.area = :area";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':area', $area);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch(Exception $ex) {
                die('<h1> Erro ao tentar buscar as informações </h1> '. $ex->getMessage());
                return false;
            }
        }
    }
?>