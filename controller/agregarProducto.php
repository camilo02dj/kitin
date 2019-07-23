<?php 
    $idgasto = rtrim($_POST['agregar']);
?>
<div class="p-0">
    <form action="../controller/agregaProductos.php" method="post" class="user">
        <div class="form-group row">
            <input type="hidden" name="idgasto" value="<?php echo $idgasto;?>">
        </div>
        <div class="form-group">
            <label form="uname">Producto:</label>
            <select id="exampleInputEmail" name="idproducto" class="form-control form-control">
                <option value="">-- Por favor seleccione un Producto --</option>
                <?php
                $query = "SELECT * FROM articulo WHERE stock>=0 ORDER BY nombre_producto";
                //echo $query;
                $result = mysqli_query($con, $query);

                if (mysqli_affected_rows($con) != 0) {
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<option value=" . $row['idarticulo'] . ">" . $row['nombre_producto'] . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group row">
        <div class="form-group col-md-4">
            <label form="uname">Cantidad:</label>
            <input type="number" class="form-control " required="" name="cantidad" id="exampleInputEmail" >
        </div>
        <div class="form-group col-md-4">
            <label form="uname">Precio Compra:</label>
            <input type="number" class="form-control" required=""  name="precioCompra" id="exampleInputEmail" >
        </div>
        <div class="form-group col-md-4">
            <label form="uname">Precio Venta:</label>
            <input type="number" class="form-control " required="" name="precioVenta" id="exampleInputEmail" >
        </div>
        </div>
        <button class="btn btn-primary">Guardar</button>
      <a href="../app/compras.php" class="btn btn-danger" role="button">Regresar</a>
        <hr>
    </form>

</div>

