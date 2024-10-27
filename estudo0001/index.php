<?php

    // Declaração da variável $aula atribuindo um valor a ela 
    // # Altere o valor
    $aula="Aula 1";

?>
<html>
<head>

    <!-- TAG curta que imprimi na tela o valor da variável $aula -->
    <title><?= $aula ?></title>

</head>
<body>

    <!-- TAG curta que imprimi na tela o valor da variável $aula -->
    <h1><?= $aula ?></h1>

    <a href="home.php?lang=pt">Português</a> | <a href="home.php?lang=en">Inglês</a>
    <!-- Repare que existe um sinal de interrogação após o nome do arquivo PHP no elemento âncora.
         Este sinal indica que em seguida vem um nome de variável e seu valor que são passados
         pelo método GET ao arquivo PHP destino -->

</body>
</html>