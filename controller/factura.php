<?php
$idventa = rtrim($_POST['cerrarV']);

$numFactura = "SELECT * FROM venta WHERE idventa='$idventa'";
//echo $query;
$result = mysqli_query($con, $numFactura);
$numFac = 'eerror';
$fecha = '0000-00-00';

if (mysqli_affected_rows($con) != 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $numFac = $row['numero_factura'];
        $fecha = $row['fecha'];
        $idcliente = $row['idclient'];
        $valor = $row['total_venta'];
        $metodoPago = $row['metodo_pago'];
    }
}
$totalVenta = number_format($valor);

$sql = "SELECT * FROM persona WHERE idpersona='$idcliente'";
$result = mysqli_query($con, $sql);
if (mysqli_affected_rows($con) != 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $cliente = $row['name'];
    }
}
?>

<div class="form-group row">
    <div class="align-items-center justify-content-between mb-0">
        <form action="../app/imprimir.php" method="post"
              <input type="hidden" value="<?php echo $idventa; ?>"/>
            <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary"  value="Imprimir"/>
        </form>
    </div>
    <div class="align-items-center justify-content-between mb-0">
        <form action="../controller/pagar.php" method="post"
              <input type="hidden" value="<?php echo $idventa; ?>"/>
                  <?php
                  if ($metodoPago == 'C') {
                      echo "<input type='submit' disabled='true'  class='d-none d-sm-inline-block btn btn-sm btn-danger'  value='Pagar'/>";
                  } else {
                      echo"<input type='submit' class='d-none d-sm-inline-block btn btn-sm btn-danger'  value='Pagar'/>";
                  }
                  ?>
        </form>
    </div>
    <div class="align-items-center justify-content-between mb-0">
        <form action="../app/imprimir.php" method="post"
              <input type="hidden" value="<?php echo $idventa; ?>"/>
                  <?php
                  if ($metodoPago == 'C') {
                      echo "<input type = 'submit' class = 'd-none d-sm-inline-block btn btn-sm btn-warning' value = 'Abonar'/>";
                  } else {
                      echo "<input type = 'submit' disabled='true' class = 'd-none d-sm-inline-block btn btn-sm btn-warning' value = 'Abonar'/>";
                  }
                  ?>
        </form>
    </div>
</div>
<div class = "form-group row">
    <div class = "form-group col-md-6">
        <label for = "txt">Factura Nº:</label>
        <input type = "text" readonly = "true" value = "<?php echo $numFac; ?>" class = "form-control form-control" name = "factura" id = "exampleInputEmail" >
    </div>
    <div class = "form-group col-md-6">
        <label for = "txt">Fecha:</label>
        <input type = "text" readonly = "true" value = "<?php echo $fecha; ?>" class = "form-control form-control" name = "factura" id = "exampleInputEmail" >
    </div>
</div>
<div class = "form-group row">
    <div class = "form-group col-md-6">
        <label for = "txt">Cliente:</label>
        <input type = "text" readonly = "true" value = "<?php echo $cliente; ?>" class = "form-control form-control" name = "factura" id = "exampleInputEmail" >
    </div>
    <div class = "form-group col-md-6">
        <label for = "txt">Valor Total:</label>
        <input type = "text" readonly = "true" value = "<?php echo $totalVenta; ?>" class = "form-control form-control" name = "factura" id = "exampleInputEmail" >
    </div>
</div>
<div class = "card shadow mb-4">
    <div class = "card-body">
        <div class = "table-responsive">
            <table class = "table table-bordered" id = "dataTable" width = "100%" cellspacing = "0">
                <thead>
                    <tr>

                        <th>CANTIDAD</th>
                        <th>ARTICULO</th>
                        <th>VALOR U</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM detalle_venta INNER JOIN articulo ON detalle_venta.idarticulo=articulo.idarticulo WHERE  idventa='$idventa'";
//echo $query;
                    $result = mysqli_query($con, $query);
                    $sno = 1;
                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $msgid = $row['idventa'];
                            echo "<td>" . $row['cantidad'] . "</td>";
                            echo "<td>" . $row['nombre_producto'] . "</td>";
                            echo "<td>" . number_format($row['precio_venta']) . "</td>";
                            echo "<td>" . number_format($row['total']) . "</td></tr>";
                            $sno++;
                        }
                    }
                    ?>									
                </tbody>
            </table>
        </div>
    </div>
</div>


