<?php
    include '../model/automovel.php';
    include '../model/Conexao.php';

    echo "<h1> Páginda teste da Classe Automovel </h1> <br> ";

    $automovel = new Automovel;

    // echo '<h4> -- Método SelectAllAutomoveis() -- </h4> ';
    // $TodosAutomoveis = $automovel->selectAllAutomovel();
    // foreach($TodosAutomoveis as $registro) {
    //     echo 'Id: '. $registro['id']. ' | ' . 'Modelo: ' . $registro['modelo'] . ' | ' . 'Preço: R$' . $registro['preco'] . '<br>';
    // }

    // echo '<h4> -- Método createAutomovel($modelo, $preco) -- </h4> ';
    // $BotaComRodas = $automovel->createAutomovel('Bota Com Rodas', 100);
    // echo 'Automovel Adicionado com Sucesso. <br>';

    // echo '<h4> -- Método readAutomovel($id) -- <h4>';
    // $getAutomovel = $automovel->readAutomovel(41);
    // echo 'Modelo: ' . $getAutomovel['modelo'] . ' | ' . 'Preço: R$' . $getAutomovel['preco'];
 
    // echo '<h4> -- Método updateAutomovel($id, $modelo, $preco) -- </h4>';
    // $RodaComBota = $automovel->updateAutomovel(41, 'Roda Com Bota', 101);
    // echo 'Atualização Feita com Sucesso. <br>';
    // echo 'Modelo: ' . $getAutomovel['modelo']. ' | ' . 'Preço: R$' . $getAutomovel['preco'];

    // echo '<h4> -- Método deleteAutomovel($id) -- </h4>';
    // $deletarAutomovel = $automovel->deleteAutomovel(42);
    
?>
