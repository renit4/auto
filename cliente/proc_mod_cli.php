<?php
    include("../conexion.php");

    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $dir = $_POST["dir"];
    $ciu = $_POST["ciu"];
    $tel = $_POST["tel"];
    $fecha = $_POST["fecha"];

    $sql = "UPDATE `cliente` 
            SET `nomyape`='$nom', `direccion`='$dir', `ciudad`='$ciu', `telefono`='$tel', `falta`='$fecha'
            WHERE `cod_cliente`='$id'";
    $res = mysqli_query($con,$sql);
    if($res == true){
        echo "<script> alert ('La modificacion fue exitosa!');
        window.location.href = '../menu.html';
        </script>";
    }
    else{
        echo "<script> alert ('Algo salio mal :(');
        window.location.href = '../menu.html';
        </script>"; 
    }

?>