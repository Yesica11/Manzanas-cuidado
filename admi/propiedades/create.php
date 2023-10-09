<?php
/* llamado a la conexion con la base de datos*/

require '../include/database.php';
$dataBase = conectarDataBase();

/*verificacion de la informacion que se envia del formulario de Registro de Municipio*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Nombre = $_POST['Nombre'];
    $Localidad = $_POST['Localidad'];
    $Direccion = $_POST['Direccion'];
    $password = $_POST['password'];

    /*Muestreo de los errores encontrados en los campos de formulacion */

    $error = [];

    if (!$Nombre) {
        $error[] = "El campo se encuentra vacido";
    }

    if (!$Localidad) {
        $error[] = "El campo se encuentra vacido";
    }

    if (!$Direccion) {
        $error[] = "El campo se encuentra vacio";
    }


    /*Guarda y envia la informacion a la base de datos  */

    $query = "INSERT INTO `Propuestasasistencia`(Nombre, year, platforms_Id, categories_Id, cover) VALUES ('$title', '$year', $plataform, $categories, '$nameArchive');";
    echo $query;
    
    if (!empty($errores) or !mysqli_query($dataBase, $query)) {
        echo "error al insertar los datos";
    } else {
        echo "datos ingresados correctamente";
        header("Location: ../inscriciones.php");
        exit();
    }
}