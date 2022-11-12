<?php
require_once 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require_once "vista/inc/Link.php"; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar2</title>
</head>
<body>

<?php
require_once "modelos/mainModel.php";
$ins_tabla1 = new mainModel();
$id=$_GET['ID'];

$sql="SELECT * FROM tabla2 WHERE ID='".$id."' ";
$statement=$ins_tabla1::conectar()->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);  
        
    foreach($results as $filas){
        $id=$filas['ID'];
        $idtabla1 = $filas['ID_TABLA1'];
         $nombre      = $filas['Nombre'];
        $EstadoC=$filas['Estado_Civil'];
        $Fecha_Na=$filas['Fecha_Nacimiento']; 
        $CC=$filas['cc'];
        $Peso=$filas['Peso'];
        $Correo=$filas['Email'];

    ?>



<div class="py-5 text-center">
      <h1 _msthash="705055" _msttexthash="318188">Formulario para editar Tabla 2 </h1>
      <div class="row justify-content-center">
 <div class="col-4" >
 <a type="button" class="btn btn-primary" href="index.php">Inicio</a>
 </div>
 <div class="col-4" >
 <a type="button" class="btn btn-primary" href="tabla2.php">Regresar</a>
 </div>
 </div>
    </div>
    <div class="py-5 text-center">
<form action="http://localhost/TALLERMVC/Tablas/Tabla1R.php" method="POST">
    <input  type="hidden" name="ID2" value="<?php echo $id; ?>" readonly>
    <input type="text" name="ID_TABLA1_A" value="<?php echo $idtabla1; ?>">
    <input type="text" name="Nombre_A" value="<?php echo $nombre; ?>"><br>
    <input type="text" name="Estado_Civil_A" value="<?php echo $EstadoC; ?>">
    <input type="text" name="Fecha_Nacimiento_A" value="<?php echo $Fecha_Na; ?>"><br>
    <input type="text" name="cc_A" value="<?php echo $CC; ?>">
    <input type="text" name="Peso_A" value="<?php echo $Peso; ?>"><br>
    <input type="text" name="Email_A" value="<?php echo $Correo; ?>">
    <input type="submit" value="Actualizar">


<?php } ?>
</div>
</from>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>



