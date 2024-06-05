<?php
    include("../conexion.php");

    $id = $_POST["id"];
    $fi = $_POST["fi"];
    $fe = $_POST["fe"];
    $est = $_POST["est"];
    $filtro = $_POST["filtro"];
    $aceite = $_POST["aceite"];
    $frenos = $_POST["frenos"];
    $desc = $_POST["desc"];

    $sql = "UPDATE `revision` 
            SET `fingreso`='$fi', `fegreso`='$fe', `estado`='$est', `cambio_filtro`='$filtro',
            `cambio_aceite`='$aceite', `cambio_freno`='$frenos', `descripcion`='$desc'
            WHERE `cod_revision`='$id'";
    $res = mysqli_query($con,$sql);
    if($res==true){
        echo "<script> alert ('Se modifico a la perfeccion!');
        window.location.href = '../menu.html';
        </script>";
    }
    else{
        echo "<script> alert ('No se pudo :(');
        window.location.href = '../menu.html';
        </script>";
    }

?>