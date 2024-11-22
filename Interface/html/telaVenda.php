<?php
    include_once '../../DB/PHP/model/Conexao.php';
    include_once '../../DB/PHP/model/cliente.php';
    include_once '../../DB/PHP/model/concessionaria.php';

    $cliente = new Cliente();
    $concessionaria = new Concessionaria();

    $listCliente = $cliente->SelectAllCliente();
    $listCon = $concessionaria->selectAllConcessionaria();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $Automovel_id = $_POST['automoveis_id'];
        $Automovel_modelo = $_POST['automoveis_modelo'];
        $Concessionaria_nome = $_POST['concessionarias_nome'];
        $Concessionaria_id = $_POST['concessionarias_id'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Venda </title>

    <link rel="stylesheet" href="../css/telaVenda.css">
    <link rel="icon" type="image/x-icon" href="../images/icone.webp">
</head>
<body>
    <main>
        <div class="box">
            <form method="POST">
                <fieldset>
                    <legend> Venda </legend>

                    <div class="nomeModelo">
                        <p> <?= $Automovel_modelo ?> </p>
                    </div>

                    <div class="cliente">
                        <label for="cliente"> Clientes: </label>
                        <select name="cliente" id="cliente">
                            <option value=""> Selecione </option>
                            <?php foreach($listCliente as $cliente) { ?> 
                                <option value="<?= $cliente['id'] ?>"> <?= $cliente['nome'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="concessionaria">
                        <label for="concessionaria"> Concessionaria: </label>
                        <select name="concesionaria" id="concessionaria">
                            <option value=""> Selecione </option>
                                <option value="<?=$Concessionaria_id?>"> <?=$Concessionaria_nome?></option>
                        </select>
                    </div>

                    <div class="btn">
                        <input type="hidden" value="<?= $Automovel_id ?>">
                        <input type="submit" value="Confirmar" class="buttom">
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>