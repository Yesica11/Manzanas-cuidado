<!DOCTYPE Html>
<Html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form class="form" action="admi/validacion.php" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Login" class="regi">
        <a href="inscriciones.php">Registrar</a>
        <input type="reset" value="Limpiar" class="regi">
    <?php
        session_start();
            if (isset($_SESSION ["Error"])){ 
                echo "<h1> {$_SESSION ["Error"]}</h1>";
                unset($_SESSION ["Error"]);

            }

            ?>
    </form>
</body>
</Html>