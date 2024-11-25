<?php 
    // Inclui apenas uma vez a classe Alocacao e Concexao
    include_once '../../DB/PHP/model/alocacao.php';
    include_once '../../DB/PHP/model/Conexao.php';

    // Cria uma instância da classe Alocacao
    $Alocacao = new Alocacao();

    // Cria-se variavel para cada Area onde ficas os automoveis(no total de 10 areas), 
    // o parametro seria o número da area
    $area_1 = $Alocacao->BuscarTabelas(1);
    $area_2 = $Alocacao->BuscarTabelas(2);
    $area_3 = $Alocacao->BuscarTabelas(3);
    $area_4 = $Alocacao->BuscarTabelas(4);
    $area_5 = $Alocacao->BuscarTabelas(5);
    $area_6 = $Alocacao->BuscarTabelas(6);
    $area_7 = $Alocacao->BuscarTabelas(7);
    $area_8 = $Alocacao->BuscarTabelas(8);
    $area_9 = $Alocacao->BuscarTabelas(9);
    $area_10 = $Alocacao->BuscarTabelas(10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas Automoveis</title>

    <!-- Importa o arquivo CSS para o HTML -->
    <link rel="stylesheet" href="../css//Areas.css">
</head>
<body>

    <!-- É criado div(divisória) com uma classe chamada Main-container(Conteiner Principal) -->
    <div class="main-container">

        <!-- Div(divisória) com uma classe chamada container(container) ou conteirer filho por ordem -->
        <div class="container">

            <!-- É criado uma div(divisória) com classe 'area' onde ficara os veiculos desta area, depois é 
            aberto um PHP para pegar a variavel da area 1 {$area_1} e verificar se esta vazio, se esta variavel
            não conter nada então a classe 'vazio' será atribuida e o CSS entra em ação para mudar a cor, caso
            conter algo dentro ele retornará o valor '', e fceha o PHP-->
            <!-- O atributo data-info é um armazenamneto de strings -->
            <!-- Dentro do atributo 'data-info' é aberto outro PHP com uma condição de if else, 
            Se{if} a Variavel{$area_1} Nao{!} for Vazia{empty} então acontecar o que esta dentro de chaves{},
            Dentro da condição é criado um laço de repetição um foreach, é pegado a variavel $area_1 onde que dentro há vários outras informações e faz uma varredura dentro com outra variavel $auto então abre chaves e fecha o PHP, depois ira mosrtar na tela a informção do automovel Modelo e Preço e depois quebra linha e fecha chaves abrindo e fechando com PHP, Caso a condição do início false no caso vazia então mostra na tela. (a cada chaves é necessario abrir e fechar o PHP). -->
            <div class="area <?php echo (empty($area_1)) ? 'vazio': '';?> " data-info='
                <?php if(!empty($area_1)) {
                    foreach($area_1 as $auto) { ?> 
                        <form method="POST" action="telaVenda.php">
                            Modelo: <?=$auto['automoveis_modelo']?> | Preço: R$<?=$auto['automoveis_preco']?> <br>

                            <input type="hidden" name="automoveis_id" value="<?=$auto['automoveis_id']?>">
                            <input type="hidden" name="automoveis_modelo" value="<?=$auto['automoveis_modelo']?>">
                            <input type="hidden" name="concessionarias_id" value="<?=$auto['concessionarias_id'] ?>">
                            <input type="hidden" name="concessionarias_nome" value="<?=$auto['concessionarias_nome']?>">
                            <input type="submit" value="Vender">
                        </form>
                    <?php } ?>
                <?php }  else { ?>
                    Nenhum Automovel
                    <?php } ?>
            '>Area 1</div>

            <!-- O processo se repete, porém, no foreach ao invés de usar chaves é usado dois ponto{:}, e para fechar o foreach é necessario abrir o PHP e usar o comando endforach e fechar PHP -->
            <div class="area <?php echo (empty($area_2)) ? 'vazio': '';?> " data-info='
                <?php if(!empty($area_2)) {
                    foreach($area_2 as $auto): ?>
                        <form method="POST" action="telaVenda.php">
                            Modelo: <?=$auto['automoveis_modelo']?> | Preço: R$<?=$auto['automoveis_preco']?> <br>

                            <input type="hidden" name="automoveis_id" value="<?=$auto['automoveis_id']?>">
                            <input type="hidden" name="automoveis_modelo" value="<?=$auto['automoveis_modelo']?>">
                            <input type="hidden" name="concessionarias_id" value="<?=$auto['concessionarias_id'] ?>">
                            <input type="hidden" name="concessionarias_nome" value="<?=$auto['concessionarias_nome']?>">
                            <input type="submit" value="Vender">
                        </form>
                    <?php endforeach; ?>
                <?php }  else { ?>
                    Nenhum Automovel
                    <?php } ?>
            '>Area 2</div>

            <!-- O processo se repte  -->
            <div class="area <?php echo (empty($area_3)) ? 'vazio' : '';?> " data-info='
                <?php if(!empty($area_3)) {
                    foreach($area_3 as $auto) { ?> 
                        Modelo: <?=$auto['automoveis_modelo']?> | Preço: R$<?=$auto['automoveis_preco']?> <br>
                    <?php } ?>
                <?php } else { ?>
                    Nenhum Automovel na Area
                    <?php } ?>
            '>Area 3</div>

            <!-- O processo se repte  -->
            <div class="area <?php echo (empty($area_4)) ? 'vazio': '';?> " data-info='
                <?php if(!empty($area_4)) {
                    foreach($area_4 as $auto): ?>
                        Modelo: <?=$auto['automoveis_modelo']?> | Preço: R$<?=$auto['automoveis_preco']?> <br>
                    <?php endforeach; ?>
                <?php } else { ?>
                    Nenhum Automovel
                    <?php } ?>
            '>Area 4</div>

            <!-- O processo se repte  -->
            <div class="area <?php echo (empty($area_5)) ? 'vazio': '';?>" data-info="
                <?php if(!empty($area_5)) {
                    foreach($area_5 as $auto): ?>
                        Modelo: <?=$auto['automoveis_modelo']?> | Preço: R$<?=$auto['automoveis_preco']?> <br>
                    <?php endforeach; ?>
                <?php } else { ?>
                    Nenhum Automovel
                    <?php } ?>
            ">Area 5</div>

            <!-- O processo se repte  -->
            <div class="area <?php echo (empty($area_6)) ? 'vazio': '';?>" data-info="
                <?php if(!empty($area_6)) {
                    foreach($area_6 as $auto): ?>
                        Modelo: <?=$auto['automoveis_modelo']?> | Preço: R$<?=$auto['automoveis_preco']?> <br>
                    <?php endforeach; ?>
                <?php } else { ?> 
                        Nenhum Automovel
                    <?php } ?>
            ">Area 6</div>

            <div class="area <?php echo (empty($area_7)) ? 'vazio': '';?> " data-info="
                <?php if(!empty($area_7)) {
                    foreach($area_7 as $auto): ?>
                        Modelo: <?=$auto['automoveis_modelo']?> | Preço: R$<?=$auto['automoveis_preco']?> <br>
                    <?php endforeach; ?>
                <?php } else { ?> 
                        Nenhum Automovel
                    <?php } ?>
            ">Area 7</div>

            <!-- O processo se repte  -->
            <div class="area <?php echo (empty($area_8)) ? 'vazio': '';?> " data-info="
                <?php if(!empty($area_8)) {
                    foreach($area_8 as $auto): ?>
                        Modelo: <?=$auto['automoveis_modelo']?> | Preço: R$<?=$auto['automoveis_preco']?> <br>
                    <?php endforeach; ?>
                <?php } else { ?> 
                        Nenhum Automovel
                    <?php } ?>
            ">Area 8</div>

            <!-- O processo se repte  -->
            <div class="area <?php echo (empty($area_9)) ? 'vazio': '';?>" data-info="
                <?php if(!empty($area_9)) {
                    foreach($area_9 as $auto): ?>
                        Modelo: <?=$auto['automoveis_modelo']?> | Preço: R$<?=$auto['automoveis_preco']?> <br>
                   <?php endforeach; ?>
                <?php } else { ?> 
                        Nenhum Automovel
                    <?php } ?>
            ">Area 9</div>

            <!-- O processo se repte  -->
            <div class="area <?php echo (empty($area_10)) ? 'vazio': '';?>" data-info="
                <?php if(!empty($area_10)) {
                    foreach($area_10 as $auto): ?>
                        Modelo: <?=$auto['automoveis_modelo']?> | Preço: R$<?=$auto['automoveis_preco']?> <br>
                    <?php endforeach; ?>
                <?php } else { ?> 
                        Nenhum Automovel
                    <?php } ?>
            ">Area 10</div>
        </div>

        <!-- Janela lateral onde ficará as informações dos automoveis -->
        <!-- é criado uma div com uma class info-box-container ou caixa de conteiner de informacao com o id de mesmo nome -->
        <div class="info-box-container" id="infoBoxContainer">
            <!-- Abri-se um formulario com uma classe e id -->
            <form class="info-box" id="infoBox">
                <!-- Mostra no topo da janela qual area esta (isso será visto no javascript) -->
                <h3 id="infoTitle">Informações</h3>
                <!-- Aqui ficará as informações do atributo data-info (isso sera visto no javascript) -->
                <p id="infoDetails">Detalhes aqui...</p>
                <!-- <input type="submit" value="Vender"> -->
            </form> 
        </div>
    </div>

    <!-- Importa o arquivo javascript para o html -->
    <script src='../js/janela.js'></script>
</body>
</html>