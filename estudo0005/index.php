<html>
<head>
    <title>Array CheckBox</title>
    <!-- importação do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center text-white p2 bg-dark bg-gradient text-uppercase">Array CheckBox</h1>
    <form method="post" action="index.php">
    <input type="hidden" name="acao" value="ok">
    <div class="container mt-5">
        <table class="table table-responsive table-bordered border-dark table-hover text-center">
            <tr class='table-dark table-active text-uppercase text-white'>
                <th>SÃO PAULO</th>
                <th>CURITIBA</th>
                <th>BELO HORIZONTE</th>
            </tr>
                <tr><td><input type="checkbox" name="estado[]" value="sao-paulo" class="form-check-input" checked>
                </td><td><input type="checkbox" name="estado[]" value="curitiba" class="form-check-input">
                </td><td><input type="checkbox" name="estado[]" value="belo-horizonte" class="form-check-input">
                </td></tr>
                <tr><td><button class="w-100 btn btn-primary btn-lg" type="submit">MOSTRAR</button></td><td></td><td></td></tr>
        </table>
    </div>
    </form>
    <div class="container mt-3">
    <table class="table table-responsive table-bordered border-dark table-hover text-center" width="500">
    <?php

        if(isset($_POST['acao'])){

            $array_lista = array();
            if(isset($_POST['estado'])){

                $array_lista = $_POST['estado'];
                $hoje = date('d/m/Y');

                $html = "<html><head></head><body style=\"font-family: arial; font-size: 7pt;\">
                <img src=\"images/logo-foto-face-branco.jpg\" width=\"100\"><br>
                <h2>HOT CODE MEDIA\n";
                $html.= "$hoje";
                $html .= "<table class=\"table table-striped table-bordered table-hover\" width=\"100%\">
                <tr><td bgcolor=\"#c1c1c1\" width=\"35%\">Estado</td></tr>";

                    foreach ($array_lista as $estado) {

                        $html .= "<tr><td>$estado</td></tr>";

                    }


                    $html .= "</table>";
                    //echo "<hr>";
                    $html .= "</html>";
                    
                
                    require_once __DIR__ . '/vendor/autoload.php';
                    
                    ob_clean();//Limpa o buffer de saída
                    ob_end_flush();
                    
                    $mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/temp']);
                    $mpdf->SetDisplayMode('fullpage');
                    
                    $mpdf->WriteHTML($html);
                    //$mpdf->Output();
                    $mpdf->Output('estados.pdf', 'D');	
                                
                
            } else {
                echo "nenhum estado selecionado";
            }
        }

    ?>

</body>
</html>