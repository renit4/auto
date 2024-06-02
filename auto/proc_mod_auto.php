<?php
        include("../conexion.php");

        $mar = $_POST["marca"];
        $mod = $_POST["mod"];
        $color = $_POST["color"];
        $precio = $_POST["precio"];
        $cli = $_POST["cod"];
        $id = $_POST["id"];   
        
        $sql2 = "UPDATE `auto` 
                SET `marca`='$mar', `modelo`='$mod', `color`='$color', `pventa`=$precio, `cod_cliente`=$cli
                WHERE `cod_auto`=$id"; 
        $res2 = mysqli_query($con,$sql2);
        
        if($res2 == true){
            echo "<script> alert('salio excelente');
                window.location.href='../index.html';
            </script>";
        }
        else{
            echo "<script> alert('salio mal :(');
                window.location.href='../index.html';
            </script>";
        }

        
    ?>