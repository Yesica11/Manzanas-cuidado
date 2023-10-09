<!DOCTYPE Html>
<Html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/iniciosesion.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
    <h1>Login</h1>
    <form class="form" action="admi/propiedades/validacion.php" method="post">
    <input type="text" name="usuario" placeholder="usuario">
    <input type="password" name="clave" placeholder="Contraseña">   
      
    <?php
        session_start();
            if (isset($_SESSION ["Error"])){ 
                echo "<h1> {$_SESSION ["Error"]}</h1>";
                unset($_SESSION ["Error"]);

            }

            ?>
    <button>Ingresar</button>
    <button>Registrar</button>
    </form>
    </div>
   
</body>
</Html>