<?php

require 'db_conn.php';
page_protect();
if (isset($_POST['documento'])) {
    
    $tipoPersona = rtrim($_POST['tipoPersona']);
    $tipoDocumento = rtrim($_POST['tipoDocumento']);
    $documento = rtrim($_POST['documento']);
    $nombre = rtrim($_POST['name']);
    $direccion = rtrim($_POST['direccion']);
    $ciudad = rtrim($_POST['ciudad']); 
    $telefono = rtrim($_POST['telefono']);
    $email = rtrim($_POST['email']);

    $consulta = "SELECT * FROM persona WHERE numero_documento='$documento' AND tipo_persona='$tipoPersona'";
    $res= mysqli_query($con, $consulta);
    if (mysqli_num_rows($res) > 0) {
        echo "<head><script>alert('LA PERSONA YA EXISTE EN EL SISTEMA');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
    } else {
        mysqli_query($con, "INSERT INTO persona (tipo_persona, name, tipo_documento, numero_documento, direccion, ciudad, telefono, email)
VALUES ('$tipoPersona','$nombre','$tipoDocumento', '$documento', '$direccion', '$ciudad', '$telefono', '$email')");
        echo "<head><script>alert('SE HA REGISTRADO LA PERSONA EXITOSAMENTE!');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";

    }
} else {
    echo "<head><script>alert('NO SE PUEDE REGISTRAR LA PERSONA, TAL VEZ NO ES UN NUMERO DE DOCUMENTO VALIDO');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../app/dashboard.php'>";
}
?>