<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "vista/inc/Link.php"; ?>
    <title>AñadirT2</title>
</head>
    <body>
<div class="container text-center">
    <div class="row justify-content-center">
 <div class="col-4" >
 <a type="button" class="btn btn-primary" href="index.php">Inicio</a>
 </div>
 <div class="col-4" >
 <a type="button" class="btn btn-primary" href="tabla2.php">Regresar</a>
 </div>
 </div>

 </div>   
<div class="container-md">  
    <h1>Formulario para añadir a Tabla 2</h1>
    <div class="mb-3">
<form action="http://localhost/TALLERMVC/Tablas/Tabla1R.php" method="post">
    <input type="text" name="ID_TABLA1" placeholder="ID TABLA1">
    <input type="text" name="Nombre" placeholder="Nombre">
    <input type="text" name="Estado_Civil" placeholder="Estado Civil">
    <input type="date" name="Fecha_Nacimiento" placeholder="DD/MM/AAAA">
    <input type="text" name="cc" placeholder="identificacion">
    <input type="text" name="Peso" placeholder="Peso">
    <input type="text" name="Email" placeholder="Correo">
    <input type="submit" name="enviar" value="Enviar">

</form>
</div>
</div>
<?php require_once "vista/inc/Scrips.php"; ?>
</body>
</html>