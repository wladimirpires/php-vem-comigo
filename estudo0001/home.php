<?php
    /* Variável $lang recebe a variável $lang vinda da âncora (link)
       do index.php (linha 20). Ler sobre os métodos 
       GET e POST */
    $lang = $_GET['lang'];

    /* Com include(), importamos o conteúdo do arquivo config.php. 
       A expressão include inclui e avalia o arquivo informado.
       include requer estudo mais aprofundado, pois é muito rica em recursos
       e também pode ser substituída por include_once que veremos mais adiante */
    include('config.php');
?>
<html>
<head>
    <!-- TAG que imprimi na tela o valor da variável $titulo usando echo -->
    <title><?php echo $titulo ?></title>
</head>
<body>
    <!-- IMPRESSÕES DE TELA
         com tag curta e com echo -->
    <h1><?= $titulo ?></h1>
    <h3><?= $label_nome ?> <?php echo $nome1 ?></h3>
    <h3><?= $label_telefone ?> <?php echo $tel1 ?></h3>
</body>
</html>