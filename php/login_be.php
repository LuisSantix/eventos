<?php 
    session_start();

    $usuario = "cliente";
    $admin = "administrador";
    $contrasenia = "123";
    $psadmin = "asd";


    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user==$usuario && $contrasenia==$pass){
        $_SESSION['usuario'] = "cliente";
        header("location: dashUser.php");
        exit;
    }else if($user==$admin && $psadmin==$pass){
        $_SESSION['usuario'] = "administrador";
        header("location: dashAdmin.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }

?>