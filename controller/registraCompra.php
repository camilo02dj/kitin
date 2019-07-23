<?php

require 'db_conn.php';
page_protect();
if (isset($_POST['valor'])) {

    $idprovedor = rtrim($_POST['idprovedor']);
    $fecha = rtrim($_POST['fecha']);
    $comprobante = rtrim($_POST['comprobante']);
    $detalle = rtrim($_POST['detalle']);
    $valor = rtrim($_POST['valor']);
    $estado = rtrim($_POST['estado']);

    mysqli_query($con, "INSERT INTO gastos (idprovedor, numero_comprobante, fecha, detalle_gasto, total_gasto, estado)
VALUES ('$idprovedor','$comprobante','$fecha','$detalle', '$valor', '$estado')");
    echo "<head><script>alert('COMPRA REGISTRADA, AHORA AGREGUE LOS PRODUCTOS ADQUIRIDOS');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/ventas.php'>";
} else {
    echo "<head><script>alert('NO SE PUEDE REGISTRAR LA COMPRA, TAL VEZ NO ESCRIBISTE UN VALOR VALIDO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
}
?>
