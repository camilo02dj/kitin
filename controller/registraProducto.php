<?php

require 'db_conn.php';
page_protect();
if (isset($_POST['categoria'])) {

    $categoria = rtrim($_POST['categoria']);
    $referencia = rtrim($_POST['referencia']);
    $nombre = rtrim($_POST['nombre']);
    $stock = rtrim($_POST['stock']);
    $categoria = rtrim($_POST['categoria']);
    $descripcion = rtrim($_POST['descripcion']);
    $seccion = rtrim($_POST['seccion']);

    $consulta = "SELECT * FROM articulo WHERE nombre='$nombre'";
    $res= mysqli_query($con, $consulta);
    if (mysqli_num_rows($res) > 0) {
        echo "<head><script>alert('EL PRODUCTO YA EXISTE EN EL SISTEMA');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
    } else {
        mysqli_query($con, "INSERT INTO articulo (idcategoria, codigo, nombre_producto, stock, descripcion, seccion)
VALUES ('$categoria','$referencia', '$nombre', '$stock','$descripcion', '$seccion')");
        echo "<head><script>alert('SE HA REGISTRADO EL PRODUCTO EXITOSAMENTE!');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";

    }
} else {
    echo "<head><script>alert('NO SE PUEDE REGISTRAR LA CATEGORIA');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
}
?>