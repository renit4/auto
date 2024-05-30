<?php
    include("../conexion.php");
    
    $mar = $_POST["marca"];
    $mod = $_POST["mod"];
    $color = $_POST["color"];
    $precio = $_POST["precio"];
    $cli = $_POST["cod"];

    $sql = "INSERT INTO `auto`(`marca`, `modelo`, `color`, `pventa`, `cod_cliente`) 
            VALUES ('$mar','$mod','$color',$precio,$cli)";

    $res = mysqli_query($con,$sql);
    if($res==true){
        echo"
        <script>
          alert('El auto ha sido registrado correctamente! ');
          window.location.href = '../index.html';
        </script>
        ";
    }
    else{
        echo"
        <script>
          alert('Algo salio mal :( ');
          window.location.href = '../index.html';
        </script>
        ";
    }

?>