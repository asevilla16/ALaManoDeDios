<?php

$serverName = "DESKTOP-C2JN085\MI_EQUIPO";
$connectionInfo = array("Database"=>"ProjectDB", "UID"=>"sa", "PWD"=>"Bonnieandclyde123", "CharacterSet"=>"UTF-8");
$con = sqlsrv_connect($serverName, $connectionInfo);

if($con){
    echo "conexion exitosa";
}else{
    echo "fallo en la conexion";
    die(print_r(sqlsrv_errors(), true));
}

$consulta = $_POST['consulta'];

    $sql = $consulta;
    
    $stmt = sqlsrv_query( $con, $sql);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
?>



<div class="form-group">
    <label for="exampleInputPassword1">Ingrese su consulta</label>
    <input type="textarea" name="consulta" class="form-control" id="exampleInputPassword1">
  </div>





