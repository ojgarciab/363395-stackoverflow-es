<?php
//include '../conexion/conexion.php';

//el dato que enviamos a traves de ajax

$valor= $_POST['valor'];
error_log("Valor de \$valor: ", $valor);
//esta variable es para retornar los datos
$jsondata = array();

//la consulta que necesites para trer el codigo y el nombre del cliente

//$query="SELECT clave, precio, km FROM ttj.centro_viajes  where clave=$valor";

//$r= mysql_query($query);
//$resultados= mysqli_fetch_array($r);

/*$sel_cat = $conn->prepare("SELECT precio, km FROM ttj.centro_viajes  where clave='$valor'");
$sel_cat->execute();
$resultados=  mysqli_fetch_array($sel_cat);

$precio = $resultados['precio'];
$km = $resultados['km'];*/

$precio = 50;
$km = 1230;

//agregamos nuestros datos al array para retornarlos
$jsondata['precio'] = $precio;
$jsondata['km'] = $km;

//este header es para el retorno correcto de datos con json
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata);
