<?php
$query= "SELECT COUNT(*) total FROM venta ";
//echo $query;
                $result = mysqli_query($con, $query);
                $contador=0;

                if (mysqli_affected_rows($con) != 0) {
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $contador= $row['total'] + 1;
                    }
                }
?>
<div class="container">
    <form action="../controller/registraVenta.php" method="post">
        <input type="hidden" value="0" name="valor"/>
        <div class="form-group">
            <label for="uname">Venta Nº:</label>
            <input type="text" name="num" readonly="true"value="FAC-<?php echo $contador;?>" class="form-control" />
        </div>
        <div class="form-group">
            <label for="uname">Fecha:</label>
            <input type="text" class="form-control" name="fecha" data-format="yyyy-mm-dd" id="datepicker3"  />
            <script>
                $('#datepicker3').datepicker();
            </script>
        </div>
        <div class="form-group">
            <label form="uname">Cliente:</label>
            <select id="exampleInputEmail" name="idcliente" class="form-control form-control">
                <option value="">-- Por favor seleccione un Cliente --</option>
                <?php
                $query = "SELECT * FROM persona WHERE tipo_persona='C' ORDER BY name";
//echo $query;
                $result = mysqli_query($con, $query);

                if (mysqli_affected_rows($con) != 0) {
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<option value=" . $row['idpersona'] . ">" . $row['name'] . "</option>";
                    }
                }
                ?>
            </select>

        </div>
        <div class="form-group">
            <label form="uname">Metodo Pago:</label>
            <select id="exampleInputEmail" name="metodoPago" class="form-control form-control">
                <option value="">-- Seleccione Metodo Pago --</option>
                <option value="E">EFECTIVO</option>
                <option value="C">CREDITO</option>
            </select>

        </div>
        <input type='submit' value='Guardar' class='btn btn-primary'/>
    </form>
</div>


