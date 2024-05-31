<?php
    include("../conexion.php");

    $fing = $_POST["fing"];
    $fegre = $_POST["fegre"];
    $est = $_POST["est"];
    $cfiltro = $_POST["cfiltro"];
    $caceite = $_POST["caceite"];
    $cfreno = $_POST["cfreno"];
    $desc = $_POST["desc"];
    $cauto = $_POST["cauto"];

    $sql = "INSERT INTO `revision`(`fingreso`,`fegreso`,`estado`,`cambio_filtro`,`cambio_aceite`,`cambio_freno`,`descripcion`,`cod_auto`)
                VALUES ('$fing','$fegre','$est',$cfiltro,$caceite,$cfreno,'$desc',$cauto)";
    $res = mysqli_query($con,$sql);

    if($res==true){
        echo "<script> alert ('Ha salido excelente!');
            window.location.href = '../index.html';
        </script>";
    }
    else{
        echo "<script> alert ('salio mal :(');
            window.location.href = '../index.html';
        </script>";
    }

?>