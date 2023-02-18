<?php
    session_start();

    if(isset($_SESSION['usuario']) && $_SESSION['usuario']=="administrador"){
        header("location: ./php/dashAdmin.php");
        exit;
    }else if(isset($_SESSION['usuario']) && $_SESSION['usuario']=="cliente"){
        header("location: ./php/dashUser.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='./css/login_style.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="./php/login_be.php" class="formulario__login" method="POST">
        <h2>Login</h2>
        <input type="text" placeholder="Usuario" name="user">
        <input type="password" placeholder="Contraseña" name="pass">
        <button>Entrar</button>
    </form>
</body>
</html>