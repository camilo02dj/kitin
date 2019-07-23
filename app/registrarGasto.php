<script src="../js/jquery.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script src="../js/gijgo.min.js" type="text/javascript"></script>
<div class="container">
    <form action="../controller/registrarGasto.php" method="post" class="needs-validation" novalidate>
        <input type="hidden" value="1" name="idproveedor"/>
        <input type="hidden" value="C" name="estado"/>
        <div class="form-group">
            <label for="uname">Fecha:</label>
            <input type="text" class="form-control" name="fecha" data-format="yyyy-mm-dd" id="datepicker"  />
            <script>
                $('#datepicker').datepicker();
            </script>
        </div>
        <div class="form-group">
            <label for="uname">Nº Comprobante:</label>
            <input type="text" class="form-control" name="comprobante" />
        </div>
        <div class="form-group">
            <label for="uname">Detalle:</label>
            <input type="text" class="form-control" name="detalle" />
        </div>
        <div class="form-group">
            <label for="uname">Valor:</label>
            <input type="number" class="form-control" name="valor" />
        </div>
        <input type='submit' value='Guardar' class='btn btn-primary'/>
    </form>
</div>

