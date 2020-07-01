<?php

// $serverName = "mysql:dbname=proyectodb;host=127.0.0.1";
// $usuario = "root";
// $password = "";



// try{
//     $pdo = new PDO($serverName, $usuario, $password);
//     echo "conectado.. ";
// }catch(PDOException $e){
//     echo "Conexion mala :( ".$e->getMessage();
// }

$host = "127.0.0.1";
$user = "root";
$password = "";
$bd = "proyectodb";

$conectar = mysqli_connect($host, $user, $password, $bd);

if($conectar){
    echo "conexion exitosa";
}else{
    echo "fallo en la conexion";
    die(print_r(mysqli_connect_error(), true));
}


?>