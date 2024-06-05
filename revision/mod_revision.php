<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar revision</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
</head>
<body class="p-3 text-primary-emphasis bg-warning-subtle border-warning-subtle ">
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
    ></script>
<?php
    include("../conexion.php");

    $id = $_GET["idr"];
    echo "$id";
    
    $sql = "SELECT R.*, A.cod_auto, A.marca, A.modelo
            FROM revision R, auto A
            WHERE `cod_revision` ='$id' 
            AND R.cod_auto = A.cod_auto";
    $res = mysqli_query($con,$sql);
    $vec = mysqli_fetch_array($res);

?>
    <h1><center>Modificacion de revision</center></h1>
    <center><a href="../menu.html">Menu</a></center>
    <br><br>
    <form action="proc_mod_rev.php" method="post">
        <table border="3" align="center" cellpadding="70" class="table table-bordered w-50">
            <tr>
                <td>codigo de revision: </td>
                <td><input type="text" value="<?php echo "$vec[0]"; ?>" id="id" name="id" readonly></td>
            </tr>
            <tr>
                <td>Fecha de ingreso: </td>
                <td><input type="date" id="fi" name="fi" value="<?php echo "$vec[1]"; ?>"></td>
            </tr>
            <tr>
                <td>Fecha de egreso: </td>
                <td><input type="date" id="fe" name="fe" value="<?php echo "$vec[2]"; ?>"></td>
            </tr>
            <tr>
                <td>estado: </td>
                <td><select name="est" id="est" >
                        <option value="espera">En espera</option>
                        <option value="revision">En revision</option>
                        <option value="finalizado">Finalizado</option>
                </select></td>
            </tr>
            <tr>
                <td>cambio de filtro:</td>
                <td><input type="text" id="filtro" name="filtro" value="<?php echo "$vec[4]"; ?>"></td>
            </tr>
            <tr>
                <td>cambio de aceite:</td>
                <td><input type="text" id="aceite" name="aceite" value="<?php echo "$vec[5]"; ?>"></td>
            </tr>
            <tr>
                <td>cambio de frenos:</td>
                <td><input type="text" id="frenos" name="frenos" value="<?php echo "$vec[6]"; ?>"></td>
            </tr>
            <tr>
                <td>descripcion</td>
                <td><input type="text" id="desc" name="desc" value="<?php echo "$vec[7]"; ?>"></td>
            </tr>
            <tr>
                <td>auto: </td>
                <td><input type="text" readonly id="auto" name="auto" value="<?php echo "$vec[10]-$vec[11]"; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><center><button type="submit">Enviar</button></center></td>
            </tr>
        </table>
    </form>
    <br><br><br>
    
</body>
</html>