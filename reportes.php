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
        <form>
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
    <?php if (isset($_GET['form_sent']) && $_GET['form_sent'] == "true") {?>
    <?php
    require_once "modelos/mainModel.php";
    $ins_tabla1 = new mainModel();
    $SDATE = $_GET['start_date'];
    $SSDATE = explode('-', $SDATE);
    $START_DATE = $SSDATE[0]."/".$SSDATE[2]."/".$SSDATE[1];
    echo('<h3>'.$START_DATE.'</h3>');
    
    $EDATE = $_GET['end_date'];
    $EEDATE = explode('-', $EDATE);
    $END_DATE = $EEDATE[0]."-".$EEDATE[2]."-".$EEDATE[1];
    echo('<h3>'.$END_DATE.'</h3>');

    $sql = "SELECT * FROM tabla2 WHERE Fecha_Nacimiento BETWEEN '$START_DATE' AND '$END_DATE'";
    $statement = $ins_tabla1::conectar()->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $filas) {
        $id = $filas['ID'];
        $idtabla1 = $filas['ID_TABLA1'];
        $nombre      = $filas['Nombre'];
        $EstadoC = $filas['Estado_Civil'];
        $Fecha_Na = $filas['Fecha_Nacimiento'];
        $CC = $filas['cc'];
        $Peso = $filas['Peso'];
        $Correo = $filas['Email'];

    ?>

        <div class="container">
            </thead>

            <tbody>
                <td><?php echo $filas['ID'] ?></td>
                <td><?php echo $filas['ID_TABLA1'] ?></td>
                <td><?php echo $filas['Nombre'] ?></td>
                <td><?php echo $filas['Estado_Civil'] ?></td>
                <td><?php echo $filas['cc'] ?></td>
                <td><?php echo $filas['Email'] ?></td>
                <td><?php echo $filas['Fecha_Nacimiento'] ?></td>
                

            </tbody>
        <?php
    }
        ?>
        </table>
        <?php } ?>
        </div>
        <?php require_once "vista/inc/Scrips.php"; ?>
</body>

</html>