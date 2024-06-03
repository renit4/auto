<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revision</title>
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
        $sql = "SELECT A.cod_auto, A.marca, A.modelo, A.color
                FROM auto A";
        $res = mysqli_query($con,$sql);
        ?>
        <h1><center>Registro de revision</center></h1>
        <center><a href="../menu.html">Volver</a></center>
        <br>
        <br>
        <form action="proc_reg.php" method="post">
            <table border="3" align="center" cellpadding="50" class="table table-bordered w-50">
                <tr>
                    <td>Fecha de Ingreso:</td>
                    <td><input type="date" name="fing" id="fing"></td>
                </tr>
                <tr>
                    <td>Fecha de Egreso:</td>
                    <td><input type="date" name="fegre" id="fegre"></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td><select name="est" id="est">
                        <option value="espera">En espera</option>
                        <option value="revision">En revision</option>
                        <option value="finalizado">Finalizado</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Cambio de Filtro:</td>
                    <td><input type="number" min="1" name="cfiltro" id="cfiltro"></td>
                </tr>
                <tr>
                    <td>Cambio de Aceite:</td>
                    <td><input type="number" min="1" name="caceite" id="caceite"></td>
                </tr>
                <tr>
                    <td>Cambio de Freno:</td>
                    <td><input type="number" min="1" name="cfreno" id="cfreno"></td>
                </tr>
                <tr>
                    <td>Descripcion:</td>
                    <td><textarea name="desc" id="desc" ></textarea></td>
                </tr>
                <tr>
                    <td>Codigo de Auto:</td>
                    <td><select name="cauto" id="cauto"> 
                    <?php while($vec = mysqli_fetch_array($res)){
                        echo "<option value='$vec[0]'>$vec[1]-$vec[2]-$vec[3]</option>";
                    }?></select></td>
                </tr>
                <tr><td colspan="2"><center><button type="submit">Enviar</button></center></td></tr>
            </table>
        </form>
        <br>
        <br>
    
    </body>
</html>