<?php

require 'db_conn.php';
page_protect();
if (isset($_POST['categoria'])) {

    $categoria = rtrim($_POST['categoria']);
    $descripcion = rtrim($_POST['descripcion']);

    $consulta = "SELECT * FROM categoria WHERE nombre='$categoria'";
    $res= mysqli_query($con, $consulta);
    if (mysqli_num_rows($res) > 0) {
        echo "<head><script>alert('LA CATEGORIA YA EXISTE EN EL SISTEMA');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
    } else {
        mysqli_query($con, "INSERT INTO categoria (nombre, descripcion)
VALUES ('$categoria','$descripcion')");
        echo "<head><script>alert('SE HA REGISTRADO LA CATEGORIA EXITOSAMENTE!');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";

    }
} else {
    echo "<head><script>alert('NO SE PUEDE REGISTRAR LA CATEGORIA');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
}
?>