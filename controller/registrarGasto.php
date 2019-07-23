<?php

require 'db_conn.php';
page_protect();
if (isset($_POST['valor'])) {

    $idproveedor = rtrim($_POST['idproveedor']);
    $fecha = rtrim($_POST['fecha']);
    $comprobante = rtrim($_POST['comprobante']);
    $detalle = rtrim($_POST['detalle']);
    $valor = rtrim($_POST['valor']);
    $estado = rtrim($_POST['estado']);

    mysqli_query($con, "INSERT INTO gastos (idprovedor, numero_comprobante, fecha, detalle_gasto, total_gasto, estado)
VALUES ('$idproveedor','$comprobante','$fecha','$detalle', '$valor', '$estado')");
    echo "<head><script>alert('SE HA REGISTRADO EL GASTO EN EL SISTEMA!');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
} else {
    echo "<head><script>alert('NO SE PUEDE REGISTRAR EL GASTO, TAL VEZ NO ESCRIBISTE UN VALOR VALIDO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
}
?>