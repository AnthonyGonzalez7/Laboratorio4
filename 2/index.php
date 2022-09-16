<?php
$cantam = $_GET["cantam"];
$cantaf = $_GET["cantaf"];
require_once("porcentaje.php");
$obj = new porcentaje();
$obj->setcantam($cantam);
$obj->setcantaf($cantaf);

/* http://lab4.com:81/2/?cantam=20&cantaf=1 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 2 Lab 4</title>
</head>
<body>
    <div class="container-fluid">
<br>
<br>
        <div class="row">
            <div class="card border-primary mb-3 d-block mx-auto" style=" width: auto;" style="max-width: 18rem;">
                <div class="card-header"><center>Porcentajes de estudiantes</center></div>
                <div class="card-body text-primary">
                    <p class="card-text">
                        <table class="table table-primary table-striped table-hover table-borderless table-sm table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Estudiantes</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Porcentaje</th>
                                    <th scope="col">Barra de porcentaje</th>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>