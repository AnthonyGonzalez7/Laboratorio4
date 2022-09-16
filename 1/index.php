<?php
$ht = $_GET["ht"];
$ppht = $_GET["ppht"];
require_once("salario.php");
$obj = new salario();
$obj->setht($ht);
$obj->setppht($ppht);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 1 Lab 4</title>
</head>
<body>
    <div class="container-sm">
        <div class="row">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-block mx-auto" style=" width: auto;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Calculo salarial</h5>
                            <p class="card-text">
                            <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Salario Bruto</th>
                                        <th scope="col">Descuento</th>
                                        <th scope="col">Salario Neto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php echo $obj->Procesos() ?>
                                    </tr>
                                </tbody>
                            </table>
                           

                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>