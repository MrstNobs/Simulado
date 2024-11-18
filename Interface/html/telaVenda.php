<?php
    include_once '../../DB/PHP/model/Conexao.php';
    include_once '../../DB/PHP/model/cliente.php';
    include_once '../../DB/PHP/model/concessionaria.php';

    $cliente = new Cliente();
    $concessionaria = new Concessionaria();

    $listCliente = $cliente->SelectAllCliente();
    $listCon = $concessionaria->selectAllConcessionaria();
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
            <form>
                <fieldset>
                    <legend> Venda </legend>
                    <div class="nomeModelo">
                        <p> *Nome-Modelo* </p>
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
                                <?php foreach($listCon as $con) { ?> 
                                    <option value=" <?=$con['id']?> "> <?=$con['concessionaria']?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Confirmar" class="buttom">
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>