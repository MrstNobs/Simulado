<?php 
    include_once '../../DB/PHP/model/Conexao.php';
    include_once '../../DB/PHP/model/venda.php';

    $Venda = new Venda();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cliente = $_POST['cliente'];
        $AutomovelID = $_POST['AutomovelID'];
        $Concessionaria = $_POST['concessionaria'];

        if($cliente && $AutomovelID && $Concessionaria) {
            $BD = $Venda->Inserir($cliente, $Concessionaria, $AutomovelID);
            echo "<h1>DADOS INSERIDOS COM SUCCESO NO BANCO DE DADOS!!!! :D";
        } else {
            echo "VOLTE E PREENCHA TODOS OS CAMPOS  >:(";
        }
    }

?>