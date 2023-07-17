<?php 
include('connection.php');
$con=connection();

$id=$_GET['id'];

$sql="SELECT * FROM persona WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>EDITAR PERSONA</title>
</head>
<body>
    <div class="person-form">
        <form action="editar.php" method="POST">
            <h1><FONT COLOR="red">EDITAR PERSONA </FONT></h1>
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input type="text" name="cedula" placeholder="Cedula" value="<?= $row['cedula']?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
            <input type="text" name="apellido" placeholder="Apellidos" value="<?= $row['apellido']?>">
            <input type="text" name="celular" placeholder="Celular" value="<?= $row['celular']?>">
            <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">               
            <input type="submit" value="ACTUALIZAR">

        </form>
    </div>
    
</body>
</html>