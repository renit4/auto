<?php
    include("../conexion.php");

    $id = $_GET["ida"];
    $sql = "DELETE FROM `auto`
            WHERE `cod_cliente`='$id'";
    $res = mysqli_query($con,$sql);
    if($res == true){
        echo "<script> alert ('La eliminacion fue excelente!');
        window.location.href = '../menu.html';
        </script>";
    }
    else{
        echo "<script> alert ('Algo salio mal :(');
        window.location.href = '../menu.html';
        </script>";
    }

?>