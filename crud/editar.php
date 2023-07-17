<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$celular=$_POST['celular'];
$email=$_POST['email'];

$sql="UPDATE persona SET nombre='$nombre', apellido='$apellido', cedula='$cedula', celular='$celular', email='$email' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
};

?>