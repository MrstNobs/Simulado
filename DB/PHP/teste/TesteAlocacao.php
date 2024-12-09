<?php
    include_once '../model/Conexao.php';
    include_once '../model/alocacao.php';

    $Alocacao = new Alocacao();

    $listaAlocacao = $Alocacao->selectAllAlocacao();
    // foreach($listaAlocacao as $registro) {
    //     echo 'Id: '. $registro['id']. ' | '. 'Area '. $registro['area']. ' | '. 'Automovel: '. $registro['automovel']. ' | '. 'Concessionaria: '. $registro['concessionaria']. ' | '. 'Quantidade: '. $registro['quantidade']. '<br>';
    // }

    $area = $Alocacao->SelectArea(10);
    // foreach($area as $registro) {
    //     echo 'Area: '. $registro['area']. '| '. 'Automovel: '. $registro['automovel']. '<br>';
    // }
    
    // $BuscarTudo = $Alocacao->BuscarTabelas(1);
    // foreach($BuscarTudo as $auto) {
    //     // echo 'Area: '. $auto['area']. ' | '. 'Modelo: '. $auto['modelo']. ' | '. 'Preço: R$'. $auto['preco'] . ' | '. 'Concessionaria: '. $auto['concessionaria']. ' | '. 'Quantidade: '. $auto['quantidade']. '<br>';

    //     // echo 'Id-Alocacao: '. $auto['alocacao_id']. '<br>'; 
    //     // echo 'Id-Automoveis: '. $auto['automoveis_id']. '<br>';
    //     // echo 'Id-Concessionarias: '. $auto['concessionarias_id']. '<br>';      

    //     // var_dump($auto['alocacao_id']);
    //     // var_dump($auto['automoveis_id']);
    //     // var_dump($auto['concessionarias_id']);
    // }
    // // var_dump($BuscarTudo, '<br>');



?>