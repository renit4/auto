<?php
    include("../conexion.php");
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $sql = "SELECT U.* FROM usuario U
            WHERE U.user = '$user'
            AND U.pass = '$pass' ";

    $res = mysqli_query($con,$sql);
    $val = mysqli_fetch_array($res);
    if($val == true){
        echo "<script> alert ('El inicio ha sido excelente!');
            window.location.href = '../menu.html';
        </script>";
    }
    else{
        echo "<script> alert ('Intentelo de nuevo!');
            window.location.href = '../index.html';
        </script>";
    }


?>