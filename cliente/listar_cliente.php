<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
</head>
<body class="p-3 text-primary-emphasis bg-warning-subtle border-primary-subtle ">
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
    ></script>
    
    <?php
        include("../conexion.php");
        $sql = "SELECT * FROM `cliente`";
        $res = mysqli_query($con,$sql);
        if($res == true){
        ?> 
        <h1><center>Listado de Clientes</center></h1>
        <center><a href="../menu.html">Menu</a></center>
        <br><br>
        <table  border="3" align="center" cellpadding="50" class="table table-bordered w-90">
            <tr>
                <td>Nombre comp</td>
                <td>Direccion</td>
                <td>Ciudad</td>
                <td>Telefono</td>
                <td>Fecha de alta</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
        <?php   while($vec = mysqli_fetch_array($res)){
            echo "<tr>";
                echo "<td>$vec[1]</td>";
                echo "<td>$vec[2]</td>";
                echo "<td>$vec[3]</td>";
                echo "<td>$vec[4]</td>";
                echo "<td>$vec[5]</td>";
                echo "<td> <a href='mod_cliente.php?idc=$vec[0]'>modificar</a> </td>";
                echo "<td> <a href=''>eliminar</a> </td>";
            echo "</tr> ";
        } echo "</table>";
        }?>
    
</body>
</html>