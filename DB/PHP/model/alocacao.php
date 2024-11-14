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

    }

?>