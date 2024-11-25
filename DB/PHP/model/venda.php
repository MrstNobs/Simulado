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

        public function Inserir($cliente, $concessionaria, $automovel) {
            try {
                $pdo = Conexao::getConexao();
                $sql = "INSERT INTO venda (cliente, concessionaria, automovel) VALUES (:cliente, :concessionaria, :automovel)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':cliente', $cliente);
                $stmt->bindParam(':concessionaria', $concessionaria);
                $stmt->bindParam(':automovel', $automovel);
                $stmt->execute();
                return 'Inserido com sucesso';
            } catch(Exception $e) {
                die("ERRO AO TENTAR INSERIR ESTES DADOS - ERRO ABAIXO - <br>". $e->getMessage());
                return false;
            }
        }

    }

?>