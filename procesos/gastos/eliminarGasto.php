<?php
    session_start();
    include "../../clases/Conexion.php";
    $conexion = $con->conectar();
    $idGasto = $_POST['idGasto'];



    $sql = "DELETE FROM t_gastos WHERE id_gasto = '$idGasto'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../../vistas/gastos/tablaGastos.php");
    } else {
        echo "No se pudo eliminar, revisa tu query :(";
    }
?>