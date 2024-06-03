<?php
    include("../conexion.php");

    $user = $_POST["user"];
    $c1 = $_POST["pass1"];
    $c2 = $_POST["pass2"];

    if($c1 != $c2){
        echo "<script>alert ('Contraseñas incorrectas');
        window.location.href = 'registrar_user.html';
        </script>";
    }
    
    $sql = "INSERT INTO `usuario` (`user`,`pass`)
            VALUES ('$user','$c1')";
    $res = mysqli_query($con,$sql);
    if($res == true){
        echo "<script>alert ('El registro fue excelente!');
        window.location.href = '../index.html';
        </script>";
    }
    else{
        echo "<script>alert ('Algo no salio bien :(');
        window.location.href = 'registrar_user.html';
        </script>";
    }

?>