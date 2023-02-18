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
    }else if($_SESSION['usuario'] != "cliente"){
        echo '
            <script>
                alert("Debes de iniciar sesion como usuario");
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
    <link rel='stylesheet' href='../css/user_style.css'>
    <title>User</title>
</head>
<body>
    <!--Barra de navegacion-->
    <form method="post" action="lista.php" id="total">
    <nav>
        <div class="container">
            <div class="container-logo">
                <h2 class="titulo"><span>Tropical</span>EV</h2>
            </div>
            
            <ul class="container-links">
                <li class="link"><input type="submit" class="redondeado" value="Buy" name="enviar"></li>
                <!--<li class="link"><a class="terminar">End buy</a></li>-->
                <li class="link"><a href="./cerrarSesion.php" >Log out</a></li>
            </ul>
            <div class="toggle">
                |||
            </div>
        </div>
    </nav>

    <!--Menu de items-->
    <div class="titulo-catalogo"><p>CATALOGO DE SERVICIOS</p></div>
    
    <div class="products-container">
        <div class="box product1" > <!--Salon-->
            <img src="../media/img/salon.jpeg" alt="" class="imga">
            <p id="salon">Salon de fiestas</p>
            <p>Precio: $3000 MXN</p>
            <input type="checkbox" name="prod[]" value="salon">
        </div>
        <div class="box product2"> <!--Sillas-->
            <img src="../media/img/sillas.jpeg" alt="" class="imga">
            <p>Sillas</p>
            <p>Precio: $1000 MXN</p>
            <input type="checkbox" name="prod[]" value="sillas">
        </div>
        <div class="box product3"> <!--Mesas-->
            <img src="../media/img/mesas.jpeg" alt="" class="imga">
            <p>Mesas</p>
            <p>Precio: $2500 MXN</p>
            <input type="checkbox" name="prod[]" value="mesas">
        </div>
        <div class="box product4"> <!--Decoracion-->
            <img src="../media/img/decoracion.jpeg" alt="" class="imga">
            <p>Decoracion</p>
            <p>Precio: $8000 MXN</p>
            <input type="checkbox" name="prod[]" value="decoracion">
        </div>
        <div class="box product5"> <!--Buffet Comida-->
            <img src="../media/img/buffet.jpeg" alt="" class="imga">
            <p>Buffet</p>
            <p>Precio: $8000 MXN</p>
            <input type="checkbox" name="prod[]" value="buffet">
        </div>
        <div class="box product6"> <!--bar-->
            <img src="../media/img/bar.jpeg" alt="" class="imga">
            <p>Bar</p>
            <p>Precio: $10000 MXN</p>
            <input type="checkbox" name="prod[]" value="bar">
        </div>
    </div>
    
    
    <!--<input type="number" placeholder = "Seleccione">-->

    <script src="../js/src_responsiveNav.js"></script>
    </form>
</body>
</html>