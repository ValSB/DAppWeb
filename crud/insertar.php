<?php 
include('connection.php');
$con=connection();

$id=null;
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$celular=$_POST['celular'];
$email=$_POST['email'];

$sql="INSERT INTO persona VALUES('$id','$nombre','$apellido','$cedula','$celular','$email')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
};
?>