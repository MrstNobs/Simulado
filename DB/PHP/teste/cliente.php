<?php

    include '../model/Conexao.php';
    include '../model/cliente.php';

    $kaua = new Cliente();
    $kaua->criaCliente('kaua daniel cardoso de brito');
    echo 'Cliente cadastrado com sucesso. <br>';

    echo '<br>';
    
    $ulitmoRegistro = $kaua->ultimoRegistro();
    echo "Nome do Ulitmo Registro Adicionado - ". $ulitmoRegistro['nome'];

    

?>