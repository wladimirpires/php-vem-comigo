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
    <!-- importação do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- IMPRESSÕES DE TELA
         com tag curta e com echo -->
    <h1 class="text-center text-white p2 bg-dark bg-gradient text-uppercase"><?= $titulo ?></h1>

    <div class="container mt-5">
        <table class="table table-responsive table-bordered border-dark table-hover text-center">
            <tr class='table-dark table-active text-uppercase text-white'>
                <th><?= $label_nome ?></th>
                <th><?= $label_telefone ?></th>
                <th><?= $label_email ?></th>
            </tr>
            <?php

                for($i=0;$i<=sizeof($array['cadastro']);$i++){

                        echo "<tr><td>".$array['cadastro']['nome'][$i]."</td><td>".$array['cadastro']['telefone'][$i]."</td><td>".$array['cadastro']['email'][$i]."</td></tr>";

                }

            ?>
        </table>

        <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">HOME</a>
    </div>
    

</body>
</html>