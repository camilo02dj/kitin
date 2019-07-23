<?php

require 'db_conn.php';
page_protect();
if (isset($_POST['cerrarV'])) {

    $idventa = rtrim($_POST['cerrarV']);

    mysqli_query($con, "UPDATE venta SET estado_venta='C' WHERE idventa='$idventa'");
    echo "<head><script>alert('VENTA CERRADA, ACONTINUACION SE DETALLA LA FACTURA');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/factura.php'>";
} else {
    echo "<head><script>alert('NO SE PUEDE CERRAR LA VENTA, TAL VEZ NO ESCRIBISTE UN VALOR VALIDO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/ventas.php'>";
}
?>
