<?php

require_once "mainModel.php";

class reporteModelo extends mainModel{
    public function filtrar_reporte_modelo($dato)
    {
      $sql = mainModel::conectar()->prepare("SELECT * FROM tabla2 WHERE Fecha_Nacimiento BETWEEN Fecha_Nacimiento=:a AND Fecha_Nacimiento=:b");
      $sql->bindParam(":a", $dato);
      $sql->bindParam(":b", $dato);
      $sql->execute();
      $results = $sql->fetchAll(PDO::FETCH_ASSOC);

      echo json_encode($results);
    }
   

}