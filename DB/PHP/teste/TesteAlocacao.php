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

    $areaRelacionada = $Alocacao->BuscaRelacionada(10);
    foreach($areaRelacionada as $registro) {
        // echo 'Area: '. $registro['area']. ' | '. 'Modelo: '. $registro['modelo']. ' | '. 'Preço: R$'. $registro['preco']. '<br>';
        var_dump($registro['id']);
    }
    
?>