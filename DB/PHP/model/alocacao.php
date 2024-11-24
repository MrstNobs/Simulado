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

        // public function BuscarTabelas($area) {
        //     try {
        //         $pdo = Conexao::getConexao();
        //         $sql = "SELECT alocacao.id as alocacao_id,
        //         alocacao.area, alocacao.quantidade,
        //         automoveis.id as automoveis_id,
        //         automoveis.modelo, automoveis.preco,
        //         concessionarias.id as concessionarias_id,
        //         concessionarias.concessionaria FROM alocacao
        //         INNER JOIN automoveis ON alocacao.automovel = automoveis.id
        //         INNER JOIN concessionarias ON alocacao.concessionaria = concessionarias.id
        //         WHERE alocacao.area = :area";
        //         $stmt = $pdo->prepare($sql);
        //         $stmt->bindParam(':area', $area);
        //         $stmt->execute();
        //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //     } catch(Exception $e) {
        //         die('ERRO AO TENTAR BUSCAR ESSAS INFORMARÇÕES {ErorR ABAxiOOo} <br>'. $e->getMessage());
        //         return false;
        //     }
        // }
        public function BuscarTabelas($area) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "SELECT 
                            alocacao.id AS alocacao_id,
                            alocacao.area AS alocacao_area,
                            alocacao.quantidade AS alocacao_quantidade,
                            automoveis.id AS automoveis_id,
                            automoveis.modelo AS automoveis_modelo,
                            automoveis.preco AS automoveis_preco,
                            concessionarias.id AS concessionarias_id,
                            concessionarias.concessionaria AS concessionarias_nome
                        FROM alocacao
                        INNER JOIN automoveis ON alocacao.automovel = automoveis.id
                        INNER JOIN concessionarias ON alocacao.concessionaria = concessionarias.id
                        WHERE alocacao.area = :area";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':area', $area);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                die('ERRO AO TENTAR BUSCAR ESSAS INFORMAÇÕES {Erro abaixo}: <br>' . $e->getMessage());
                return false;
            }
        }
        
    }
?>