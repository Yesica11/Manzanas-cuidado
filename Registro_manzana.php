<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $codigo = $_POST["codigo"];
    $mapa = $_POST["mapa"];
    $tarjeta = $_POST["tarjeta"];

    require "admi/crud.php";
    registarEstablecimieto($nombre, $codigo, $descripcion);
}
?>

<!DOCTYPE Html>
<Html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Registro de Manzanas</title>
</head>

<body>
    <h1>Registro de Manzanas de Municipios </h1>
    <form class="form">
        <label for="">Codigo</label>
        <input type="text" name="codigo">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Mapa</label>
        <input type="text" name="mapa">
        <label for="">Tarjeta</label>
        <input type="text" name="tarjeta">
        <select name="servicios">
            <option value="Estudiar"> Estudiar</option>
            <option value="Emprender" >Emprender</option>
            <option value="Emplearse">Emplearse</option>
            <option value="Descansar">Descansar</option>
            <option value="Ejercitarse">Ejercitarse</option>
            <option value="RecibirOrientacion">Recibir Orientacion</option>
            <option value="AsesoriasJuridicas">Asesorias Juridicas</option>
            <option value="AsesoriasPsicologicas">Asesorias Psicologicas</option>
            <option value="Lavanderías Comunitarias">Lavanderías Comunitarias</option>
        </select>
        <input type="submit" value="Registrar" class="regi">
        <a href="index.php">Volver</a>
    </form>
</body>

</Html>