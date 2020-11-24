<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body align = "center" style="background-color:#efefef; font-family:Lucida Console; margin:20px">
    <?php
        include("baseDatos.php");
        if (isset($_POST["btnEditar"])){
            $nombre=$_POST["nombre"];
            $marca=$_POST["marca"];
            $precio=$_POST["precio"];
            $descripcion=$_POST["descripcion"];
            $foto=$_POST["foto"];
            $id=$_GET["id"];
            $transaccion=new Basedatos();
            $consultaSQL="UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',descripcion='$descripcion',foto='$foto' WHERE idProducto='$id'";
            $transaccion->editarDatos($consultaSQL);
        }
    ?>
</body>
</html>