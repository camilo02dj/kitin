<?php
$idventa = rtrim($_POST['agregar']);
?>

    <form action="../controller/agregaArticulo.php" method="post" class="user">
        <div class="form-group row">
            <input type="hidden" name="idventa" value="<?php echo $idventa; ?>">
            <label form="uname">Articulo:</label>
            <select id="lista1" name="idarticulo"  class="form-control form-control">
                <option value="">-- Por favor seleccione un articulo --</option>
                <?php
                $query = "SELECT * from detalle_gasto INNER JOIN articulo ON detalle_gasto.idarticulo=articulo.idarticulo WHERE stock>0 ORDER BY nombre_producto";
                //echo $query;
                $result = mysqli_query($con, $query);

                if (mysqli_affected_rows($con) != 0) {
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<option value=" . $row['idarticulo'] . ">" . $row['nombre_producto'] . "----- Disponibles   " . $row['stock'] . " Unidades</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group row">
            <div class="form-group col-md-2">
                <label form="uname">Cantidad:</label>
                <input type="number" class="form-control " required="" name="cantidad" id="exampleInputEmail" >
            </div>
            <div id="select2lista"></div>
        </div>
        <input type="submit" class="btn btn-primary" value="Guardar"/>
        <a href="../app/detallarVenta.php.php" class="btn btn-danger" role="button">Regresar</a>
        <hr>
    </form>


<script type="text/javascript">
    $(document).ready(function () {
        $('#lista1').val(1);
        recargarLista();

        $('#lista1').change(function () {
            recargarLista();
        });
    })
</script>
<script type="text/javascript">
    function recargarLista() {
        $.ajax({
            type: "POST",
            url: "../controller/datos.php",
            data: "idarticulo=" + $('#lista1').val(),
            success: function (r) {
                $('#select2lista').html(r);
            }
        });
    }
</script>


