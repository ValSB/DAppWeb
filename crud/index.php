<?php
include('connection.php');
$con=connection();

$sql="SELECT * FROM persona";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="CSS/style.css">
    <title>PERSONAS CRUD</title>
</head>
<body>
    <div class="person-form">
        <form action="insertar.php" method="post">
            <h1><FONT COLOR="red">CREAR PERSONA </FONT></h1>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="celular" placeholder="Celular">
            <input type="text" name="cedula" placeholder="Cedula">
            <input type="text" name="email" placeholder="Email">

            <input type="submit" value="GUARDAR">
        </form>
    </div>

    <div class="person-table">
        <h2><FONT COLOR="blue">LISTA DE PERSONAS </FONT></h2>
        <table>
            <thead>
                <tr>
                    <th><FONT COLOR="red">ID </FONT></th>
                    <th><FONT COLOR="red">NOMBRE </FONT></th>
                    <th><FONT COLOR="red">APELLIDO </FONT></th>
                    <th><FONT COLOR="red">CEDULA </FONT></th>
                    <th><FONT COLOR="red">CELULAR </FONT></th>
                    <th><FONT COLOR="red">EMAIL </FONT></th>
                    <th></th>
                    <th></th>
                </tr>

            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_array($query)): ?>
                <tr>
                <th> <?= $row['id']?></th>    
                <th> <?= $row['cedula']?></th>            
                <th><?= $row['nombre']?></th>
                <th><?= $row['apellido']?></th>
                <th><?= $row['celular']?></th>
                <th><?= $row['email']?></th>

                <th><a href="actualizar.php?id=<?= $row['id']?>" class="person-table--edit">EDITAR</a></th>
                <th><a href="eliminar.php?id=<?= $row['id']?>" class="person-table--delete">ELIMINAR</a></th>
                </tr>
                <?php endwhile?>     
            </tbody>
        </table>      
    </div>
</body>
</html>