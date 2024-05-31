<?php
    include("../conexion.php");

    $nom = $_POST["nom"];
    $dire = $_POST["dire"];
    $ciudad = $_POST["ciudad"];
    $tel = $_POST["tel"];
    $fecha = $_POST["fecha"];

    $sql = "INSERT INTO `cliente`(`nomyape`, `direccion`, `ciudad`, `telefono`, `falta`) 
            VALUES ('$nom','$dire','$ciudad',$tel,$fecha)";
    $res = mysqli_query($con,$sql);
    if($res==true){
        echo "
        <script>
        alert ('salio excelente!');
        window.location.href='../index.html';
        </script>";
    }
    else{
        echo "
        <script>
        alert ('salio mal :(');
        window.location.href='../index.html';
        </script>";
    }
?>