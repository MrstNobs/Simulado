<?php
    include '../model/Conexao.php';
    include '../model/concessionaria.php';

    $concessionaria = new Concessionaria;

    echo '<h1> -- Métodos da classe Concessionaria -- </h1>';

    echo '<h3> -- Método SelectAllConcessionaria() -- </h3>';
    $TodoRegistro = $concessionaria->selectAllConcessionaria();
    foreach($TodoRegistro as $registro) {
        echo 'Id: '. $registro['id'] . ' | ' . 'Nome Concessionaria: ' . $registro['concessionaria'] . ' <br> ';
    }

    // echo '<h3> -- Método createConcessionaria($concessionaria) -- </h3>';
    // $KakaCarros = $concessionaria->createConcessionaria('KakaCars');
    // echo $KakaCarros;
    // $IndustriKarros = $concessionaria->createConcessionaria('IndustriKarros');
    // echo $IndustriKarros;

    echo '<h3> -- Método readConcessionaria($id) -- </h3>';
    $getConcessionaria = $concessionaria->readConcesisonaria(6);
    echo 'Nome Concessionaria: ' .$getConcessionaria['concessionaria'];

    echo '<h3> -- Método updateConcessionaria($id, $concessionaria) -- </h3>';
    $KukaCars = $concessionaria->updateConcessionaria(7, 'KUKACars');
    echo $KukaCars;

    echo '<h3> -- Método deleteConcessionaria($id) -- </h3>';
    $deletar = $concessionaria->deleteConcessionaria(8);
    echo $deletar;
?>