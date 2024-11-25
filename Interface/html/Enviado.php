<?php 
    // Inclui as classes apenas uma vez neste arquivo
    include_once '../../DB/PHP/model/Conexao.php';
    include_once '../../DB/PHP/model/venda.php';

    // Instância a classe
    $Venda = new Venda();

    // Verifica se o FORM do arquivo 'telaVenda.php' foi enviado como POST
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // pegas as informações do arquivo 'telaVenda.php' com $_POST[atributo] e joga na variavel
        $cliente = $_POST['cliente'];
        $AutomovelID = $_POST['AutomovelID'];
        $Concessionaria = $_POST['concessionaria'];

        // Verifica se as variavels estão com preenchidas ou com informações
        if($cliente && $AutomovelID && $Concessionaria) {

            // Cria uma variale que é instancia pela função Inserir(), esta função irá inserir esses dados no Banco de Dados com os parâmentros passados
            $BD = $Venda->Inserir($cliente, $Concessionaria, $AutomovelID);

            // Mostra na tela caso de tudo certo
            echo "<h1>DADOS INSERIDOS COM SUCCESO NO BANCO DE DADOS!!!! :D";
        } else {
            // Caso a verificação das variavels estivessem faltando, nem que seja um, mostra na tela
            echo "VOLTE E PREENCHA TODOS OS CAMPOS  >:(";
        }
    }

?>