<html>
<head>
    <title>Sorteio</title>
    <!-- importação do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center text-white p2 bg-dark bg-gradient text-uppercase">Sorteio</h1>
    <form method="post" action="index.php">
    <input type="hidden" name="acao" value="ok">
    <div class="container mt-5">
        <table class="table table-responsive table-bordered border-dark table-hover text-center">
            <tr class='table-dark table-active text-uppercase text-white'>
                <th>"Neo", "Morpheus", "Trinity", "Cypher", "Tank"</th>
                
            </tr>
                <tr><td><input class="btn btn-primary" type="submit" value="SORTEAR"></td></tr>
        </table>
    </div>
    </form>
    <div class="container mt-3">
    <table class="table table-responsive table-bordered border-dark table-hover text-center" width="500">
    <?php

        if(isset($_POST['acao'])){

            $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
            $rand_keys = array_rand($input, 1);                 

            echo "<tr><td><h1>$input[$rand_keys]</td></tr>";
            
        }

    ?>
    </table>
    <div>

</body>
</html>