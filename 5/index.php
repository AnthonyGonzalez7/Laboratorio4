<?php
require_once("componentes.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 5 Lab 4</title>
</head>
<body>

    <div class="container-fluid">
    
        <div class="row d-block mx-auto" style="width = auto">
            <br><br>
            <?php 
            
                echo Componentes::myModal("Ir a Google",
                                          "danger",
                                          "Modal para ir a google",
                                          "da clic en el boton Google para abrir el buscador",
                                          "Cerrar",
                                          "Abrir Google.com",
                                          "https://www.google.com");

            ?>
            <br><br><br><br>
            <?php 
            
                echo Componentes::myAlert("success",
                                         "Alerta");


            ?>
            <br><br><br><br>
            <?php 
            
                echo Componentes::myBadge("Hola",
                                         "Hola 2");


            ?>
            <br><br><br><br>
            <?php 
            
                echo Componentes::myBreadcrumb("Titulo 1",
                                              "Titulo 2",
                                              "Titulo 3");

            ?>

        </div>
    
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>