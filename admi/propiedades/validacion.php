<?php 
require "../../include/config/database.php";
$dataBase = conectarDataBase();

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    $Nombre = $_POST ["usuario"];
    $password = $_POST ["clave"];

    session_start();
    $_SESSION ["usuario"] = $Nombre;

    $query = "SELECT * FROM usuarios WHERE NombreUsuario = '$Nombre' and clave = '$password'";
    echo $query;
    if (mysqli_num_rows(mysqli_query( $dataBase, $query))) {
        header("location:../../inicio.php");
    }
    else {
        $_SESSION ["Error"] = 'EL INGRESO NO ES VALIDO';
        header("Location:../../login.php");
        exit();
    }
    mysqli_close($dataBase);
}