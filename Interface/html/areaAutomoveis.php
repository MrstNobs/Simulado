<?php 
  include_once '../../DB/PHP/model/alocacao.php';
  include_once '../../DB/PHP/model/Conexao.php';

  $alocacao = new Alocacao();

  $area1 = $alocacao->BuscaRelacionada(1);
  $area2 = $alocacao->BuscaRelacionada(2);
  $area3 = $alocacao->BuscaRelacionada(3);
  $area4 = $alocacao->BuscaRelacionada(4);
  $area5 = $alocacao->BuscaRelacionada(5);
  $area6 = $alocacao->BuscaRelacionada(6);
  $area7 = $alocacao->BuscaRelacionada(7);
  $area8 = $alocacao->BuscaRelacionada(8);
  $area9 = $alocacao->BuscaRelacionada(9);
  $area10 = $alocacao->BuscaRelacionada(10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Patio Automovéis </title>

    <link rel="icon" type="image/x-icon" href="../images/icone.webp">
    <link rel="stylesheet" href="../css/areaAutomoeis.css">
</head> 
<body>
    <form method="POST" action="./telaVenda.php">
        <div class="container">
            <div class="box">
                <div class="area" data-info='
                <?php foreach($area1 as $automovel) { ?> 
                    Modelo: <?=$automovel['modelo']?> | Preço: R$<?=$automovel['preco']?> 
                <?php } ?>
                '>Area 1</div>
                <div class="area" data-info='
                <?php foreach($area2 as $auto) { ?>
                    Modelo: <?=$auto['modelo']?> | Preço: R$<?=$auto['preco']?>    
                <?php } ?>
                '>Area 2 </div>
                <div class="area" data-info="Informações da Area 3">Area 3 </div>
                <div class="area" data-info="Informações da Area 4">Area 4 </div>
                <div class="area" data-info="Informações da Area 5">Area 5 </div>
                <div class="area" data-info="Informações da Area 6">Area 6 </div>
                <div class="area" data-info="Informações da Area 7">Area 7 </div>
                <div class="area" data-info="Informações da Area 8">Area 8 </div>
                <div class="area" data-info="Informações da Area 9">Area 9 </div>
                <div class="area" data-info="Informações da Area 10">Area 10 </div>
            </div>

            <div class="Area-Info" id="AreaInfo">
                <h3 id="TituloInfo"></h3>
                <label id="InfoAutomovel"> Informações <br> </label>
                <input type="submit" value="Vender" id="vender">
            </div>
        </div>
    </form>
    <script src="../js/janela.js"></script>
</body>
</html>