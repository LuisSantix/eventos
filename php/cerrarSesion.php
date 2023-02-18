<?php
    session_start();
    session_destroy();
    echo '
            <script>
                alert("Se ha cerrado la sesion correctamente");
                window.location = "../index.php";
            </script>
        ';
?>