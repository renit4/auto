<?php
    include("../conexion.php");

    $id = $_GET["ida"];

    $sql2 = "SELECT R.cod_auto FROM revision R
                WHERE `cod_auto`='$id'";
    $res2 = mysqli_query($con,$sql2);
    $vec = mysqli_fetch_array($res2);
    
    if($vec[0] ==true){
        echo "<script> alert ('El auto esta en una revision, no se puede eliminar');
        window.location.href = '../menu.html';
        </script>";
    }
    else{
    $sql = "DELETE FROM `auto`
            WHERE `cod_auto`='$id'";
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
    }



?>