<?php

    include '../model/Conexao.php';
    include '../model/cliente.php';

    $kaua = new Cliente;

    // echo '-- Método criarCliente() -- <br>';
    // $kaua->criaCliente('kaua daniel cardoso de brito');
    // echo 'Cliente cadastrado com sucesso. <br>';

    // $kaua->criaCliente('sthefani');
    // echo 'Cliente adiocionado com sucesso >-< ';


    // echo '<br> <br> <br> --------------------------------------------------- <br> <br> <br>';
    
    // echo '-- Método ultimoRegistro() -- >br> ';
    // $ulitmoRegistro = $kaua->ultimoRegistro();
    // echo "Nome do Ulitmo Registro Adicionado - ". $ulitmoRegistro['nome'];

    // echo '<br> <br> <br> --------------------------------------------------- <br> <br> <br>';

    // echo '-- Método SelectAllClienteCliente() -- <br>';
    // $allclientes = $kaua->SelectAllCliente();
    // foreach($allclientes as $registro){
    //     echo 'ID: '. $registro['id'] . 'Nome: ' . $registro['nome']. '<br>';
    // }

    // echo '<br> <br> <br> --------------------------------------------------- <br> <br> <br>';

    // echo "-- Método getCliente() -- <br> ";
    // $pegarCliente = $kaua->getCliente(63);
    // echo "nome do getCliente: " . $pegarCliente['nome'];
    
    // echo '<br> <br> <br> --------------------------------------------------- <br> <br> <br>';

    // echo "-- Método atualizarCliente() -- <br>";
    // $atualizarCliente = $kaua->atualizarCliente(63, "Sthefani Fagundes de Vargas");
    // echo 'Nome do Cliene - sthefani foi atualizado para ' . $pegarCliente['nome']; 
    
    // echo '<br> <br> <br> --------------------------------------------------- <br> <br> <br>';

    // echo "-- Método deletarCliente() -- <br> ";
    // $deletarCliente = $kaua->deletarCliente(64);
    // echo 'Cliente do ID de número 64 foi deletado com sucesso';
    
?>