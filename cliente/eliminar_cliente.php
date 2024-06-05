<?php
    include("../conexion.php");

    $id = $_GET["idc"];
    $sql = "DELETE FROM `cliente`
            WHERE `cod_cliente` NOT IN (SELECT cod_cliente FROM auto)
            AND `cod_cliente` = '$id'";
    $sql2 = "SELECT * FROM `cliente`
                WHERE `cod_cliente` = '$id'";
    
    $res = mysqli_query($con,$sql);
    $res2 = mysqli_query($con,$sql2);
    $vec = mysqli_fecth_array($res2);

    if($vec == true){
        echo "<script> alert ('Algo salio mal :(');
        window.location.href = '../menu.html';
        </script>";
    }else{
        if($res == true){
        echo "<script> alert ('La eliminacion fue excelente!');
        window.location.href = '../menu.html';
        </script>";
        }  
    }

    

?>