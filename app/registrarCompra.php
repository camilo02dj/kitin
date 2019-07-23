<script src="../js/jquery.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script src="../js/gijgo.min.js" type="text/javascript"></script>
<div class="container">
    <form action="../controller/registraCompra.php" method="post">
        <input type="hidden" value="A" name="estado"/>
        <input type="hidden" value="0" name="valor"/>
        <input type="hidden" class="form-control" name="detalle" value="Compra" />
        <div class="form-group">
            <label for="uname">Fecha:</label>
            <input type="text" class="form-control" name="fecha" data-format="yyyy-mm-dd" id="datepicker2"  />
            <script>
                $('#datepicker2').datepicker();
            </script>
        </div>
        <div class="form-group">
            <label form="uname">Proveedor:</label>
            <select id="exampleInputEmail" name="idprovedor" class="form-control form-control">
                <option value="">-- Por favor seleccione un Proveedor --</option>
                <?php
                $query = "SELECT * FROM persona WHERE tipo_persona='P' ORDER BY name";
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
            <label for="uname">Nº Comprobante:</label>
            <input type="text" class="form-control" name="comprobante" />
        </div>
        <input type='submit' value='Guardar' class='btn btn-primary'/>
    </form>
</div>


