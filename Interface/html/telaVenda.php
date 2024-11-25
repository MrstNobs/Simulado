<?php
    include_once '../../DB/PHP/model/Conexao.php';
    include_once '../../DB/PHP/model/cliente.php';
    include_once '../../DB/PHP/model/venda.php';

    $venda = new Venda();
    $cliente = new Cliente();

    $listaClientes = $cliente->SelectAllCliente();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $AutomovelID = $_POST['automoveis_id'];
        $AutomovelModelo = $_POST['automoveis_modelo'];
        $ConcessionariaID = $_POST['concessionarias_id'];
        $ConcessionariaNome = $_POST['concessionarias_nome'];
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
            <form method="POST" action="./Enviado.php">
                <fieldset>
                    <legend> Venda </legend>

                    <div class="nomeModelo">
                        <p> <?= $AutomovelModelo ?> </p>
                    </div>

                    <div class="cliente">
                        <label for="cliente"> Clientes: </label>
                        <select name="cliente" id="cliente">
                            <option value=""> Selecione </option>
                            
                            <?php foreach($listaClientes as $cliente): ?>
                                <option value="<?=$cliente['id']?>"> <?=$cliente['nome']?> </option>                            
                            <?php endforeach; ?>

                        </select>
                    </div>
                    
                    <div class="concessionaria">
                        <label for="concessionaria"> Concessionaria: </label>
                        <select name="concessionaria" id="concessionaria">
                            <option value=""> Selecione </option>

                            <option value="<?=$ConcessionariaID?>"> <?=$ConcessionariaNome?> </option>

                        </select>
                    </div>

                    <div class="btn">
                        <input type="hidden" name="AutomovelID" value="<?=$AutomovelID?>">
                        <input type="submit" value="Confirmar" class="buttom">
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>