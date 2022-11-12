<?php
require_once 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

<?php 
/*if(isset($_POST['enviar'])){

    try {
    
        $statement = $mbd->prepare("UPDATE tabla1 SET descripcion = :ddd,  Clase = :ccc, Salon = :sss WHERE ID = :id");
    
        $statement->bindParam(':id', $id);
        $statement->bindParam(':ddd', $Descripcion);
        $statement->bindParam(':ccc', $Clase);
        $statement->bindParam(':sss', $Salon); 
       
        $id = $_POST['id'];
        $Descripcion = $_POST['descripcion'];
        $Clase        = $_POST['Clase'];
        $Salon     = $_POST['Salon'];
    
    
        $statement->execute();

        if($statement){
            echo "<script language='JavaScript'>
            alert('Los datos fueros Modificados');
            location.assign('tabla1.php');</script>";
          }else{
             echo "<script language='JavaScript'>
             alert('ERROR:Los datos NO fueros Modificados correctamente');
             location.assign('tabla1.php');</script>";
          }
      
    } catch (PDOException $e) {
        header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            'error' => [
                'codigo' => $e->getCode(),
                'mensaje' => $e->getMessage()
            ]
        ]);
    }

    }else{*/
       


?>

<?php
require_once "modelos/mainModel.php";
$ins_tabla1 = new mainModel();
$id=$_GET['ID'];

$sql="SELECT * FROM tabla1 WHERE id='".$id."' ";
$statement=$ins_tabla1::conectar()->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);  
        
    foreach($results as $filas){
        $id=$filas['ID'];
        $Descripcion = $filas['descripcion'];
         $Clase        = $filas['Clase'];
         $Salon     = $filas['Salon'];
    ?>



<div class="container">
    <div class="py-5 text-center">
      <h1 _msthash="705055" _msttexthash="318188">Formulario para editar Tabla 1 </h1>
      <div class="row justify-content-center">
 <div class="col-4" >
 <a type="button" class="btn btn-primary" href="index.php">Inicio</a>
 </div>
 <div class="col-4" >
 <a type="button" class="btn btn-primary" href="tabla1.php">Regresar</a>
 </div>
 </div>
    </div>
    <div class="container text-center">
    
    <form  action="http://localhost/TALLERMVC/Tablas/Tabla1R.php" method="post">
    <input type="hidden" name="ID_A" value="<?php echo $id; ?> " readonly ><br>
    <input type="text" name="descripcion_A" value="<?php echo $Descripcion;?>" ><br>
    <input type="text" name="Clase_A" value="<?php echo $Clase; ?>"><br>
    <input type="text" name="Salon_A" value="<?php echo $Salon; ?>"><br>
    <input type="submit"  value="ACTUALIZAR"><br>
   <?php  
} ?>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>



