<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servidor  = "localhost";
        $usuario  = "root";
        $clave  = "";
        $baseDeDatos  = "ejemplo";

        $enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);

    ?>

    <?php

        if (isset($_POST['registro'])){
        $nombre= $_POST ['nombre'];
        $correo= $_POST ['correo'];
        $telefono= $_POST ['telefono'];
        
        $insertarDatos = "INSERT INTO datos VALUES('$nombre','$correo','$telefono')";

        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
    }
    ?>

    <form action="#" name="ejemolo" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="email" name="correo" placeholder="email">
        <input type="number" name="telefono" placeholder="numero">

        <input type="submit" name="registro">
        <input type="reset">
    </form>
</body>

</html>