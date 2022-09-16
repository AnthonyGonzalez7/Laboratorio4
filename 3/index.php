<?php 
$po = $_GET["po"];
$vidau = $_GET["vidau"];
require_once("depresiacion.php");
$obj = new depresiacion();
$obj -> setpo($po);
$obj -> setvidau($vidau);


/* http://lab4.com:81/3/?po=150000&vidau=5 */ 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 3 Lab 4</title>
</head>
<body>
    <div class="container-fluid ">
    <br><br>
        <div class="row">
            <div class="card d-block mx-auto" style=" width: auto;" style="width: 18rem;">
                <div class="card-body">
                <h1><center>Calculo de depresiación</center></h1>
                <H4>Precio original: <?php echo $po ?>$</H4>
                <h4>Vida Util: <?php echo $vidau?></h4>
                <h4>Depreciacion anual: <?php echo $po/$vidau ?> $</h4>
                    <p class="card-text">
                        <table class="table table-primary table-striped table-hover table-borderless table-sm table-responsive-md">
                            <thead>
                                <tr>
                                    <th scope="col"><center>Año</center></th>
                                    <th scope="col"><center>Valor por año</center></th>
                                    <th scope="col"><center>Valor Recuperado</center></th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php echo $obj->Procesos() ?>

                            </tbody>
                        </table>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>