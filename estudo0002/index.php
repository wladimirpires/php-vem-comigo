<?php

    // Declaração da variável $aula atribuindo um valor a ela 
    // # Altere o valor
    $aula="Aula 2 (Array & CSS)";

?>
<!DOCTYPE html>
<head>

    <!-- TAG curta que imprimi na tela o valor da variável $aula -->
    <title><?= $aula ?></title>
    <!-- importação do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <!-- TAG curta que imprimi na tela o valor da variável $aula -->
    <h1 class="text-center text-white p2 bg-dark bg-gradient text-uppercase"><?= $aula ?></h1>

    <a href="home.php?lang=pt" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Português</a>
    <a href="home.php?lang=en" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Inglês</a>
    <!-- Repare que existe um sinal de interrogação após o nome do arquivo PHP no elemento âncora.
         Este sinal indica que em seguida vem um nome de variável e seu valor que são passados
         pelo método GET ao arquivo PHP destino -->


</body>
</html>
