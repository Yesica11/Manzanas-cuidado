<?php 
require "../include/database.php";
$dataBase = conectarDataBase();

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    $Nombre = $_POST ["usuario"];
    $password = $_POST ["password"];

    session_start();
    $_SESSION ["usuario"] = $Nombre;

    $query = "SELECT * FROM usuarios WHERE NombreUsuario = '$Nombre' and Clave = '$password'";
    echo $query;
    if (mysqli_num_rows(mysqli_query( $dataBase, $query))) {
        header("Location:../inicio.php");
    }
    else {
        $_SESSION ["Error"] = 'EL INGRESO NO ES VALIDO';
        header("Location:../inicio.php");
        exit();
    }
    mysqli_close($dataBase);
}