<?php
//configuracion necesaria para acceder a la data base
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = " ";
    $dbname = "proyecto";

    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;








}










?>