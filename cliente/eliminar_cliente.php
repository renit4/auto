<?php
    include("../conexion.php");

    $id = $_GET["idc"];
    
    $sql2 = "SELECT A.cod_cliente FROM auto A
                WHERE `cod_cliente` = '$id'";
    
    $res2 = mysqli_query($con,$sql2);
    $ver = mysqli_fetch_array($res2);

    if($ver[0] == $id){
        echo "<script> alert ('no se puede eliminar ya que un auto esta asociado.');
        window.location.href = '../menu.html';
        </script>";
    }
    else{
        
    $sql = "DELETE FROM `cliente`
            WHERE `cod_cliente` = '$id'";

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

