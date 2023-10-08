<?php
require "../include/database.php";
require 'dataselect.php';

$dataBase = conectarDataBase();
$inscriciones = inscriciones($dataBase);

$datos = selectusuarios($dataBase);
while ($row = mysqli_fetch_array($datos)) {

}