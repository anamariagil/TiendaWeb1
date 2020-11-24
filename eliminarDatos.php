<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body align = "center" style="background-color:#efefef; font-family:Lucida Console; margin:20px">
    <?php
        include("baseDatos.php");
        $id=$_GET["id"];
        $transaccion=new baseDatos();
        $consultaSQL="DELETE FROM productos WHERE idProducto='$id'";
        $transaccion->eliminarDatos($consultaSQL);
    ?>
</body>
</html>