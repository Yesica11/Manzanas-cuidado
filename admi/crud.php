<?php

require "include/database.php";

//empieza el bloque de Registrar

function registarMunicipios ($nombre, $localidad, $direccion){
    $dataBase = conectarDataBase();
    $query = "INSERT INTO usuarios (nombre, localidad, direccion) VALUES ('$nombre', '$localidad', '$direccion')";
    mysqli_query($dataBase, $query);

}

function registarEstablecimieto($nombre, $codigo, $responsable){
    $dataBase = conectarDataBase();
    $query = "INSERT INTO establecimientos (Nombre, codigo, responsable) VALUES ('$nombre', '$codigo', '$responsable')";
    mysqli_query($dataBase, $query);

}

function registarManzana($nombre, $codigo, $responsable){
    $dataBase = conectarDataBase();
    $query = "INSERT INTO establecimientos (Nombre, codigo, responsable) VALUES ('$nombre', '$codigo', '$responsable')";
    mysqli_query($dataBase, $query);

}

function registarUsuario($nombre, $clave){
    $dataBase = conectarDataBase();
    $query = "INSERT INTO usuarios (Nombre, clave) VALUES ('$nombre', '$clave')";
    mysqli_query($dataBase, $query);


}
//Empieza el bloque de Borrar

function borrarPorIdCategoriasServicio($id){
    $dataBase = conectarDataBase();
    $query = "DELETE FROM categoriasservicios WHERE id = $id";
    mysqli_query($dataBase, $query);
}
function borrarPorIdEstablecimeintos($id){
    $dataBase = conectarDataBase();
    $query = "DELETE FROM establecimientos WHERE id = $id";
    mysqli_query($dataBase, $query);
}

function borrarPorIdManzana($id){
    $dataBase = conectarDataBase();
    $query = "DELETE FROM manzana WHERE id = $id";
    mysqli_query($dataBase, $query);
}

function borrarPorIdMujeres($id){
    $dataBase = conectarDataBase();
    $query = "DELETE FROM mujeres WHERE id = $id";
    mysqli_query($dataBase, $query);
}
function borrarPorIdMujeresServicios($id){
    $dataBase = conectarDataBase();
    $query = "DELETE FROM mujeresservicios WHERE id = $id";
    mysqli_query($dataBase, $query);
}

function borrarPorIdMunicipios($id){
    $dataBase = conectarDataBase();
    $query = "DELETE FROM municipios WHERE id = $id";
    mysqli_query($dataBase, $query);
}

function borrarPorIdPropuestasasistencias($id){
    $dataBase = conectarDataBase();
    $query = "DELETE FROM propuestasasistencias WHERE id = $id";
    mysqli_query($dataBase, $query);
}

function borrarPorIdServicios($id){
    $dataBase = conectarDataBase();
    $query = "DELETE FROM servicios WHERE id = $id";
    mysqli_query($dataBase, $query);
}

function borrarPorIdUsuarios($id){
    $dataBase = conectarDataBase();
    $query = "DELETE FROM usuarios WHERE id = $id";
    mysqli_query($dataBase, $query);
}
