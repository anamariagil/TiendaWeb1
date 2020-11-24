<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body align = "center" style="background-color:#efefef; font-family:Lucida Console">
    <header style="background-color:#ded2e0">
        <hr>
        <h1>Administración de productos</h1>
        <hr>
    </header>
    <form action="vistaSecundaria.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre del producto" style="font-family:Lucida Console; text-align:center; width:400px; height:50px; position:absolute; left:200px; top:150px">
        <input type="text" name="marca" placeholder="Marca del producto" style="font-family:Lucida Console; text-align:center; width:400px; height:50px; position:absolute; left:750px; top:150px">
        <input type="number" name="precio" placeholder="Precio del producto" style="font-family:Lucida Console; text-align:center; width:950px; height:50px; position:absolute; left:200px; top:220px">
        <input type="text" name="descripcion" placeholder="Descripción" style="font-family:Lucida Console; text-align:left; width:950px; height:170px; position:absolute; left:200px; top:290px">
        <input type="text" name="foto" placeholder="URL de la foto" style="font-family:Lucida Console; text-align:center; width:950px; height:50px; position:absolute; left:200px; top:480px">
        <button type="submit" name="registrar" style="font-family:Lucida Console; text-align:center; width:140px; height:40px; position:absolute; left:609px; top:555px; border:1.5px solid #5b2777; background-color: #c3adc7; border-radius: 50px;">Registrar</button>
    </form>
</body>
</html>