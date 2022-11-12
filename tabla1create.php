<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "vista/inc/Link.php"; ?>
    <title>AñadirT1</title>
</head>
<body>

<div class="container text-center">
    <div class="row justify-content-center">
 <div class="col-4" >
 <a type="button" class="btn btn-primary" href="index.php">Inicio</a>
 </div>
 <div class="col-4" >
 <a type="button" class="btn btn-primary" href="tabla1.php">Regresar</a>
 </div>
 </div>

 </div>   
<div class="container-md">  
    <h1>Formulario para añadir a Tabla 1</h1>
<form  action="http://localhost/TALLERMVC/Tablas/Tabla1R.php" method="post">
 <div class="mb-3">
  <input type="text" name="descripcion" placeholder="Descripcion">
  <input type="text" name="Clase" placeholder="Clase">
    <input type="text" name="Salon" placeholder="Salon">
    <input type="submit" name="enviar" value="AGREGAR">
</div>

</div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


