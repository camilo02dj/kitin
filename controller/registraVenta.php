<?php

require 'db_conn.php';
page_protect();
if (isset($_POST['valor'])) {

    $idcliente = rtrim($_POST['idcliente']);
    $num = rtrim($_POST['num']);
    $fecha = rtrim($_POST['fecha']);
    $valor = rtrim($_POST['valor']);
    $metodoPago = rtrim($_POST['metodoPago']);

    mysqli_query($con, "INSERT INTO venta (idclient, numero_factura, fecha, total_venta, metodo_pago)
VALUES ('$idcliente', '$num','$fecha', '$valor', '$metodoPago')");
    echo "<head><script>alert('FACTURA REGISTRADA, AHORA AGREGUE LOS ARTICULOS');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/ventas.php'>";
} else {
    echo "<head><script>alert('NO SE PUEDE REGISTRAR LA COMPRA, TAL VEZ NO ESCRIBISTE UN VALOR VALIDO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
}
?>