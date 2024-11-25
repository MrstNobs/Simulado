<?php
    // Inclui as classes neste arquivo apenas uma vez
    include_once '../../DB/PHP/model/Conexao.php';
    include_once '../../DB/PHP/model/cliente.php';
    include_once '../../DB/PHP/model/venda.php';

    // Instância as classes
    $venda = new Venda();
    $cliente = new Cliente();

    // Jogas todos os clientes Instâncias em uma variavel
    $listaClientes = $cliente->SelectAllCliente();

    // Verifica se o servidor recebeu o método POST do arquivo 'Areas.php'
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Atribui as informações do arquivo 'Areas.php' para aqui no arquivo 'telaVenda.php' com os atributos dentro do $_POST[atributos]
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

    <!-- Importa os arquivos CSS para o HTML -->
    <link rel="stylesheet" href="../css/telaVenda.css">
    <link rel="icon" type="image/x-icon" href="../images/icone.webp">
</head>
<body>
    <!-- Cria um Main -->
    <main>
        <!-- Cria uma div com a classe 'box' de caixa -->
        <div class="box">
            <!-- Cria um formulario com método POST e com ação(actio) de enviar para o arquivo 'Enviado.php' -->
            <form method="POST" action="./Enviado.php">
                <!-- Coloca uma linha ao redor -->
                <fieldset>
                    <!-- Cria uma legenda no meio da linha Legend -->
                    <legend> Venda </legend>

                    <!-- Cria uma div com a classe 'nomeModelo' onde ficara o nome do modelo do automovel -->
                    <div class="nomeModelo">
                        <!-- Abre um paragrafo e dentro possui um PHP com uma variavel com a informação do Modelo do automovel -->
                        <p> <?= $AutomovelModelo ?> </p>
                    </div>

                    <!-- Cria uma div com uma classe 'cliente' -->
                    <div class="cliente">
                        <!-- Cria uma label onde sera atribuida um select -->
                        <label for="cliente"> Clientes: </label>

                        <!-- Cria uma selecao com o nome 'cliente' e com identificado(id) com nome 'cliente' -->
                        <select name="cliente" id="cliente">

                            <!-- Coloca uma opção com valor Vazio(""), é mostrado para o usuário a opção 'Selecione' -->
                            <option value=""> Selecione </option>
                            
                            <!-- Abre um PHP com uma laço de repetição e verificação de cada cliente com a variaval $cliente -->
                            <!-- <?php foreach($listaClientes as $cliente): ?> : serve para substituir o {}, depois é fechada o PHP para que o HTML da função OPTION funcione  -->
                                <!-- Colcoa uma opção com valor do ID do cliente em PHP | Mostra o Nome do Cliente correspondente com ID em PHP -->
                                <option value="<?=$cliente['id']?>"> <?=$cliente['nome']?> </option>                            
                                <!-- Fecha o PHP, aqui ele encerra o foreeach, com se fosse o } -->
                            <?php endforeach; ?>

                        </select>
                    </div>
                    
                    <!-- Cria uma div com a class 'concessionaria' -->
                    <div class="concessionaria">
                        <!-- Cria um label que onde sera atribuida um selcet -->
                        <label for="concessionaria"> Concessionaria: </label>

                        <!-- Cria uma seleção de opção com o nome 'concessionaria' e identiifcado(id) 'concessionaria' -->
                        <select name="concessionaria" id="concessionaria">
                            <!-- Opção com valor Vazio(""), é mostrado para o usário 'Selecione' -->
                            <option value=""> Selecione </option>
                            
                            <!-- Opção com valor do ID da concessionaria em PHP | Mostrado para o usuario o nome da Concessionaria correspondente ao ID em PHP -->
                            <option value="<?=$ConcessionariaID?>"> <?=$ConcessionariaNome?> </option>

                        </select>
                    </div>
                    
                    <!-- Cria uma div com class 'btn' de button -->
                    <div class="btn">
                        <!-- Coloca um tipo Escondido(hidden) com o nome de 'AutomovelID' e com valor do ID do Automovel recebido pelo POST -->
                        <input type="hidden" name="AutomovelID" value="<?=$AutomovelID?>">
                        <!-- Colocar um Botão com valor 'Confirmar' com tipo de 'submit' que seria enviar e com class 'buttom' para o CSS, Este botão enviará junto o tipo 'hidden' junto -->
                        <input type="submit" value="Confirmar" class="buttom">
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>