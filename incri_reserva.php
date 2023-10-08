<!DOCTYPE Html>
<Html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Registro de Reserva</title>
</head>
<body>
    <h1>Registro de Reserva</h1>
    <form class="form">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="nombre">Servicio</label>
        <input type="text" name="servicio" id="servicio">
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha">
        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora">
        <input type="submit" value="Registrar" class="regi">
        <input type="reset" value="Limpiar" class="regi">
        <a href="index.php">Volver</a>
    </form>
</body>
</Html>