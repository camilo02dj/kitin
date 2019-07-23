<?php

require 'db_conn.php';
page_protect();
if (isset($_POST['idproducto'])) {

    $idgasto = rtrim($_POST['idgasto']);
    $idproducto = rtrim($_POST['idproducto']);
    $cantidad = rtrim($_POST['cantidad']);
    $precioCompra = rtrim($_POST['precioCompra']);
    $precioVenta = rtrim($_POST['precioVenta']);

    mysqli_query($con, "INSERT INTO detalle_gasto (idgasto, idarticulo, cantidad, precio_compra, precio_venta)
VALUES ('$idgasto','$idproducto','$cantidad','$precioCompra', '$precioVenta')");
    echo "<head><script>alert('PRODUCTO AGREGADO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/compras.php'>";
} else {
    echo "<head><script>alert('NO SE PUEDE REGISTRAR LA COMPRA, TAL VEZ NO ESCRIBISTE UN VALOR VALIDO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
}
?>