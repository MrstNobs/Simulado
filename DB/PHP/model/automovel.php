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

    }

?>