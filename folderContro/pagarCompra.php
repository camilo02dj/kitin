<?php

require 'db_conn.php';
page_protect();
if (isset($_POST['pagar'])) {

    $idgasto = rtrim($_POST['pagar']);

    mysqli_query($con, "UPDATE gastos SET estado='C' WHERE idgasto='$idgasto'");
    echo "<head><script>alert('PAGO REALIZADO CON EXITO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/compras.php'>";
} else {
    echo "<head><script>alert('NO SE PUEDE REGISTRAR LA COMPRA, TAL VEZ NO ESCRIBISTE UN VALOR VALIDO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/compras.php'>";
}
?>