<?php

$nombres=$_POST('nombres');
$apellidos=$_POST('apellidos');
$telefono=$_POST('telefono');
$correo=$_POST('correo');
$contraseña=$_POST('contraseña');
$domicilio=$_POST('domicilio');
$ciudad=$_POST('ciudad');
$estado=$_POST('estado');
$codigopost=$_POST('codigopostal');
$archivo=$_POST('archivo');

$insertarhotel='insert into registrarusuario (nombre,apellido,telefono,correo,
contraseña, domicilio,ciudad,estado,codigopostal,archivo)
values ("'.$nombres.'","'.$apellidos.'"
,"'.$telefono.'","'.$correo.'","'.$contraseña.'"
,"'.$domicilio.'","'.$ciudad.'","'.$estado.'","'.$codigopost.'","'.$archivo.'")';

//echo $registrarusuario;
include('conexion.php');
mysqli_query($conexion, $registrarusuario)
or die ('error al insertar.');
header("location:agregar.php")

?>




