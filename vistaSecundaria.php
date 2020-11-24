<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodega</title>
</head>
<body align = "center" style="background-color:#efefef; font-family:Lucida Console">
    <header style="background-color:#ded2e0">
        <hr>
        <h1>Productos en bodega</h1>
        <hr>
    </header>
    <?php
        include("baseDatos.php");
        if (isset($_POST["registrar"])) {
            $nombre=$_POST["nombre"];
            $marca=$_POST["marca"];
            $precio=$_POST["precio"];
            $descripcion=$_POST["descripcion"];
            $foto=$_POST["foto"];
            $transaccion=new baseDatos();
            $consultaSQL="INSERT INTO productos(nombre,marca,precio,descripcion,foto) VALUES ('$nombre','$marca','$precio','$descripcion','$foto')";
    ?>
            <div style="border:1px solid #5b2777">
                <h3><?php $transaccion->agregarDatos($consultaSQL)?></h3>
                <?php        
                    $transaccion=new baseDatos();
                    $consultaSQL="SELECT * FROM productos WHERE 1";
                    $productos=$transaccion->consultarDatos($consultaSQL);
                    print_r($productos);
        }
                ?>
                <br>
            </div>
    <?php
        foreach($productos as $producto):
    ?>
    <div style="border:1px solid #5b2777; margin-left:300px; margin-right:300px; margin-top:10px">
        <br>
        <img src="<?php echo($producto["foto"]) ?>" style="border:1px solid #5b2777; width: 250px; height: 250px;">
        <div>
            <h4><b><?php echo($producto["nombre"])?> - <?php echo($producto["marca"])?></b></h4>
            <p><?php echo($producto["descripcion"])?></p>
            <h5><?php echo($producto["precio"])?></h5>
            <a href="eliminarDatos.php?id=<?php echo($producto["idProducto"])?>" type="submit" name="eliminar" style="font-family:Lucida Console; text-align:center; border:1.5px solid #5b2777; background-color:#c3adc7; border-radius:50px; color: #000000; text-decoration:none; font-size: 1rem; padding: 2px 20px 0">Eliminar</a>
            <a href="editarDatos.php?id=<?php echo($producto["idProducto"])?>" type="submit" name="editarDatos" style="font-family:Lucida Console; text-align:center; border:1.5px solid #5b2777; background-color:#c3adc7; border-radius:50px; color: #000000; text-decoration:none; font-size: 1rem; padding: 2px 20px 0">Editar</a>
        </div>
        <br>
        <br>
    </div>
    <?php
        endforeach
    ?>
    <br>
    <br>
    <a href="eliminarTodo.php" type="submit" name="eliminarTodo" style="font-family:Lucida Console; text-align:center; border:1.5px solid #5b2777; background-color:#c3adc7; border-radius:50px; color: #000000; text-decoration:none; font-size: 1rem; padding: 2px 20px 0">Eliminar todo</a>
</body>
</html>