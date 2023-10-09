<?php
function conectarDataBase (){
    $dataBase= Mysqli_connect('localhost', 'root', '110299', 'manzanas_del_cuidado');

    if($dataBase){
        return $dataBase; 
    } else{
        echo "No se conecto";
    }
    return $dataBase;
}
