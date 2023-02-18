<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Debes de iniciar sesion");
                window.location = "../index.php";
            </script>
        ';
        session_destroy();
        die();
    }else if($_SESSION['usuario'] != "administrador"){
        echo '
            <script>
                alert("Debes de iniciar sesion como admin");
                window.location = "../index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel='stylesheet' href='estilos.css'>-->
    <title>Administrador</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
</head>
<body>
    <section class="content">
        <h1>Grafica</h1>
        <a href="./cerrarSesion.php" >Log out</a>
        <canvas id="grafica"></canvas>
    </section>

    <script src="../js/scr_egrafica.js"></script>
</body>
</html>