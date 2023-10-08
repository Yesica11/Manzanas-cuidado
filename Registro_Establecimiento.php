<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $codigo = $_POST["codigo"];
    $descripcion = $_POST["descripcion"];

    require "admi/crud.php";
    registarEstablecimieto($nombre, $codigo, $descripcion);
}
?>
<!DOCTYPE Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Document</title>
</head>
<body>

    <h1>Establecimientos</h1>
    <form class="form" action="Registro_Establecimiento.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <label for="">Codigo</label>
        <input type="text" name="codigo">
        <label for="">Responsable</label>
        <input type="text" name="responsable">
        <input type="submit" value="Registrar" class="regi">
    
        <a href="index.php">Volver</a>
        
        
    </form>
</body>
</html>