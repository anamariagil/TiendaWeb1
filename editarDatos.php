<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body align = "center" style="background-color:#efefef; font-family:Lucida Console">
    <header style="background-color:#ded2e0">
        <hr>
        <h1>Editar</h1>
        <hr>
    </header>
    <?php
        include("baseDatos.php");
        if (isset($_POST["btnEditar"])){
            $nombre=$_POST["nombre"];
            $marca=$_POST["marca"];
            $precio=$_POST["precio"];
            $descripcion=$_POST["descripcion"];
            $foto=$_POST["foto"];
        }
    ?>
    <br>
    <div style="border:1px solid #5b2777; margin-left:300px; margin-right:300px; margin-top:10px">
        <br>
        <img src="<?php echo($producto["foto"]) ?>" style="border:1px solid #5b2777; width: 250px; height: 250px;">
        <div>
            <br>
            <div>
                <input type="text" name="nombreEditar" placeholder="Nombre del producto" style="font-family:Lucida Console; text-align:center; width:650px; height:30px; left:200px; top:220px">
            </div>
            <br>
            <div>
                <input type="text" name="marcaEditar" placeholder="Marca del producto" style="font-family:Lucida Console; text-align:center; width:650px; height:30px; left:200px; top:220px">
            </div>
            <br>
            <div>
                <input type="number" name="precioEditar" placeholder="Precio del producto" style="font-family:Lucida Console; text-align:center; width:650px; height:30px; left:200px; top:220px">
            </div>
            <br>
            <div>
                <input type="text" name="descripcionEditar" placeholder="Descripción" style="font-family:Lucida Console; text-align:center; width:650px; height:50px; left:200px; top:220px">
            </div>
            <br>
            <a href="editar.php" type="submit" name="btnEditar" style="font-family:Lucida Console; text-align:center; border:1.5px solid #5b2777; background-color:#c3adc7; border-radius:50px; color: #000000; text-decoration:none; font-size: 1rem; padding: 2px 20px 0">Editar</a>
        </div>
        <br>
    </div>
    <br>
    <br>
</body>
</html>