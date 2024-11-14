<?php

    class Venda{

        public function selectAllVenda() {
            try {
                $sql = "SELECT * FROM venda";
                $stmt = Conexao::getConexao()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $result;
            } catch(Exception $ex) {
                die("Erro ao listar toda as Vendas e Relações com ela: ". $ex->getMessage());
                return false;
            }
        }

    }

?>