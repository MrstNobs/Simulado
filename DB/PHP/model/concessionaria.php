<?php 

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
    }

?>