<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "vista/inc/Link.php"; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
</head>

<body>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-4">
                <a type="button" class="btn btn-primary" href="index.php">Inicio</a>
            </div>
        </div>
    </div>
    <div class="container ">
        <form action="http://localhost/TALLERMVC/Tablas/Tabla1R.php" method="post">
            <h4>Búsqueda por Fecha</h4>
            Fecha comienzo: <br>
            <input type="date" id="start_date" name="start_date" value="09/01/2015" placeholder="mm/dd/yyyy"> <br>
            Fecha final:<br>
            <input type="date" id="end_date" name="end_date" value="10/01/2015" placeholder="mm/dd/yyyy"><br />
            Fecha:<br>

            <input type="hidden" id="form_sent" name="form_sent" value="true">
            <input type="submit" id="btn_submit" value="Enviar"><br>

        </form>
    </div>
    
    <?php
    require_once "modelos/reporteModelo.php";
    $ins_tabla1 = new reporteModelo();
   $resultado=reporteModelo::filtrar_reporte_modelo();
    ?>
        </div>
        <?php ?>
</body>

</html>