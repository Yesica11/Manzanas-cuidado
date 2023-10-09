<?php
function mujeres($dataBase) 
{
    $querymujeres = "SELECT * FROM mujeres" ;
    $datosmujeres = mysqli_query($dataBase, $querymujeres);
    $mujeres = array();

    while ($row =mysqli_fetch_array($datosPlataform)) {
        $plataform[] = $row ['Name'];
    }
    return $plataform;
}

function municipios($dataBase) 
{
    $querymunicipios = "SELECT * FROM municipios" ;
    $datosmunicipios = mysqli_query($dataBase, $querymunicipios);
    $municipios = array();

    while ($row =mysqli_fetch_array($datosmunicipios)) {
        $plataform[] = $row ['Name'];
    }
    return $nombre;
}

function Reserva($dataBase) 
{
    $queryreserva = "SELECT * FROM propuestasasistencias" ;
    $datosreserva = mysqli_query($dataBase, $queryreserva);
    $reservas = array();

    while ($row =mysqli_fetch_array($datosreserva)) {
        $plataform[] = $row ['Name'];
    }
    return $nombre;
}
