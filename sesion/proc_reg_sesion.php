<?php
    include("../conexion.php");

    $user = $_POST["user"];
    $c1 = $_POST["pass1"];
    $c2 = $_POST["pass2"];

    if($c1 == $c2){
        echo "<script>alert ('Contraseñas iguales');</script>";
    }
    else{
        echo "<script>alert ('Contraseñas incorrectas');
        window.location.href = 'registrar_user.html';
        </script>";
    }
    $sql = "";

?>