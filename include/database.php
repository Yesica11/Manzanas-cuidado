<?php

function conectarDataBase (){
    $dataBase= Mysqli_connect('localhost', 'root', '110299', 'manzanas_del_cuidado');

    if($dataBase){
        return $dataBase; 
    } else{
        echo "Error en tu datos incorrectos. ";
    }
    return $dataBase;
}
