<html>
<head>
    <title>Idade</title>
    <!-- importação do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center text-white p2 bg-dark bg-gradient text-uppercase">Cálculo de Idade</h1>
    <form method="post" action="index.php">
    <input type="hidden" name="acao" value="ok">
    <div class="container mt-5">
        <table class="table table-responsive table-bordered border-dark table-hover text-center">
            <tr class='table-dark table-active text-uppercase text-white'>
                <th>Data de Nascimento</th>
                
            </tr>
                <tr><td><input type="date" name="dt_nasc"><br><br><input class="btn btn-primary" type="submit" value="CALCULAR"></td></tr>
        </table>
    </div>
    </form>
    <div class="container mt-3">
    <table class="table table-responsive table-bordered border-dark table-hover text-center" width="500">
    <?php

        if(isset($_POST['dt_nasc']) && $_POST['dt_nasc'] != "" ){

            $data = $dt_nasc = $_POST['dt_nasc'];

            // separando yyyy, mm, ddd
            $dt = explode('-', $data);

            // data atual
            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            // Descobre a unix timestamp da data de nascimento do fulano
            $nascimento = mktime( 0, 0, 0, $dt[1], $dt[2], $dt[0]);

            // cálculo
            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
            //echo "Idade: $idade Anos";
            

            echo "<tr><td><h1>Idade: $idade Anos</td></tr>";
            
        } else {
            echo "Preencha o campo data de nascimento !";
        }

    ?>
    </table>
    <div>

</body>
</html>