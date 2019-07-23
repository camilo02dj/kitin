<?php

require 'db_conn.php';
page_protect();
if (isset($_POST['cantidad'])) {

    $idventa = rtrim($_POST['idventa']);
    $idarticulo = rtrim($_POST['idarticulo']);
    $cantidad = rtrim($_POST['cantidad']);
    $valorUnitario = rtrim($_POST['valorUnitario']);
    $total= $cantidad * $valorUnitario;
 

    mysqli_query($con, "INSERT INTO detalle_venta (idventa, idarticulo, cantidad, precio_venta, total)
VALUES ('$idventa','$idarticulo','$cantidad','$valorUnitario', '$total')");
    echo "<head><script>alert('ARTICULO AGREGADO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/ventas.php'>";
} else {
    echo "<head><script>alert('NO SE PUEDE REGISTRAR LA COMPRA, TAL VEZ NO ESCRIBISTE UN VALOR VALIDO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
}
?>