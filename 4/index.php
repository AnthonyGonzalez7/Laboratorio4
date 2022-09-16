<?php
$texto = $_GET["texto"];
$salt = $_GET["salt"];
require_once("cifrados.php");
$obj = new cifrados();
$obj -> settexto($texto);
$obj -> setsalt($salt);

/* http://lab4.com:81/4/?texto=hola123&salt=abcde */ 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 4 Lab 4</title>
</head>
<body>
    <div class="container-fluid">
    <br><br>
        <div class="row">
            
            <div class="card border-primary mb-3 -block mx-auto" style=" width: auto;" style="max-width: 18rem;">
                <div class="card-body text-primary">
                    <h2><center>Cifrado de texto</center></h2>
                    <p class="card-text">
                        <table class="table table-info table-striped table-hover table-borderless table-sm table-responsive-md">
                            <thead>
                                <tr>
                                    <th scope="col">Contraseña a cifrar</th>
                                    <th scope="col"><center><?php echo $texto ?></center></th>
                                </tr>
                                <tr>
                                    <th scope="col">Salt</th>
                                    <th scope="col"><center><?php echo $salt ?></center></th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php echo $obj->Proceso1() ?>
                            <?php echo $obj->Proceso2() ?>
                            <?php echo $obj->Proceso3() ?>
                            <?php echo $obj->Proceso4() ?>
                            <?php echo $obj->Proceso5() ?>
                            <?php echo $obj->Proceso6() ?>
                            <?php echo $obj->Proceso7() ?>
                            <?php echo $obj->Proceso8() ?>
                            <?php echo $obj->Proceso9() ?>
                            <?php echo $obj->Proceso10() ?>
                            <?php echo $obj->Proceso11() ?>

                                
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