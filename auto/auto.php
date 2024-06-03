<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
</head>
<body  class="p-3 text-primary-emphasis bg-warning-subtle border-primary-subtle ">
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
    ></script>
    <?php
        include("../conexion.php");
        $sql= "SELECT C.cod_cliente, C.nomyape
                From cliente C";
        $res = mysqli_query($con,$sql);

    ?>
    <h1><center>Registrar auto</center></h1>
    <center><a href="../menu.html">Volver</a></center>
    <br>
    <br>
    <form action="reg_auto.php" method="post">
        <table border="3" align="center" cellpadding="50" class="table table-bordered w-50">
        
            <tr>
                <td>Marca:</td>
                <td><input type="text" id="marca" name="marca"></td>
            </tr>
            <tr>
                <td>Modelo:</td>
                <td><input type="text" id="mod" name="mod"></td>
            </tr>
            <tr>
                <td>Color:</td>
                <td><input type="text" id="color" name="color"></td>
            </tr>
            <tr>
                <td>precio venta:</td> 
                <td><input type="number" min="0" id="precio" name="precio"></td>
            </tr>
            <tr>
                <td>cod cliente:</td>
                <td><select name="cod" id="cod">
                <?php while($vec=mysqli_fetch_array($res)){
                    echo "<option value='$vec[0]'>$vec[1]</option>";   
                }?>
                </select></td>
            </tr>
            <tr> <td colspan="2"><center><button type="submit" >Enviar</button></center></td></tr>
        </table>
    </form>

</body>
</html>