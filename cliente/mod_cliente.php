<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Clientes</title>
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
        $id = $_GET["idc"];
        echo "$id";
        $sql = "SELECT * FROM cliente
                WHERE `cod_cliente`='$id'";
        $res = mysqli_query($con,$sql);
        $vector = mysqli_fetch_array($res);
    ?>
    <h1><center>Modificacion de clientes</center></h1>
    <center><a href="../menu.html">Menu</a></center>
    <br><br>
    <form action="proc_mod_cli.php" method="post">
        <table border="3" align="center" cellpadding="50" class="table table-bordered w-50">
            <tr>
                <td>Codigo de cliente: </td>
                <td><input type="text" value="<?php echo "$id"; ?>" id="id" name="id" readonly></td>
            </tr>
            <tr>
                <td>Nombre completo: </td>
                <td><input type="text" value="<?php echo "$vector[1]"; ?>" id="nom" name="nom" placeholder="nombre y apellido"></td>
            </tr>
            <tr>
                <td>Direccion: </td>
                <td><input type="text" id="dir" value="<?php echo "$vector[2]"; ?>" name="dir" placeholder="direccion"></td>
            </tr>
            <tr>
                <td>Ciudad: </td>
                <td><input type="text" id="ciu" value="<?php echo "$vector[3]"; ?>" name="ciu" placeholder="ciudad"></td>
            </tr>
            <tr>
                <td>Telefono: </td>
                <td><input type="number" id="tel" value="<?php echo "$vector[4]"; ?>" name="tel" placeholder="telefono"></td>
            </tr>
            <tr>
                <td>Fecha de alta: </td>
                <td><input type="date" value="<?php echo "$vector[5]"; ?>" id="fecha" name="fecha" ></td>
            </tr>
            <tr>
                <td colspan="2"><center><button type="submit">Enviar</button></center></td>
            </tr>
        </table>
    </form>


</body>
</html>