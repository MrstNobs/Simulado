<?php
    include_once '../model/Conexao.php';
    include_once '../model/venda.php';
    include_once '../model/cliente.php';
    include_once '../model/automovel.php';
    include_once '../model/concessionaria.php';

    $Venda = new Venda();
    $Cliente = new Cliente();
    $Automovel = new Automovel();
    $Concessionaria = new Concessionaria();

    $ListaCliente = $Cliente->SelectAllCliente();
    $ListaConcessionaria = $Concessionaria->selectAllConcessionaria();
    $modelo = $Automovel->readAutomovel(4);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        try {
            $cliente = $_POST['cliente'] ?? null;
            $concessionaria = $_POST['concessionaria'] ?? null;
            $automovelId = $modelo['id'];

            if($cliente && $concessionaria){
                $Insercao = $Venda->Inserir($cliente, $concessionaria, $automovelId);
                echo "<p>$Insercao</p>";
            } else {
                echo 'PREECHA TODOS OS CAMPOS!!!!!!!!!!!!!!!!!!!!!';
            }
        } catch(Exception $e) {
            die('nao deu meu nobre. <br>'. $e->getMessage());
            return false;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <h3> REGISTRO DA VENDA TESTE </h3>

        <label for="cliente"> clientes: </label>
        <select name="cliente" id="cliente">
            <option value=""> Selecione </option>

            <?php foreach($ListaCliente as $cliente): ?>
                <option value="<?=$cliente['id']?>"><?=$cliente['nome']?> </option>
            <?php endforeach; ?>

        </select>
        <br> <br>

        <label for="concessionaria">Concessionarias:</label>
        <select name="concessionaria" id="concessionaria">
            <option value=""> Selecione </option>

            <?php foreach($ListaConcessionaria as $con): ?>
                <option value="<?=$con['id']?>"> <?=$con['concessionaria']?> </option>
            <?php endforeach; ?>

        </select>
        <br> <br>

        <input  type="submit" value="Vender">
    </form>
</body>
</html>