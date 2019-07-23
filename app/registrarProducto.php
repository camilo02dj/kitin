 <meta charset="utf-8">
<div class="p-0">
    <form action="../controller/registraProducto.php" method="post" class="user">
        <div class="form-group row">
            <div class="form-group col-md-4">
                <label for="txt">Categoria:</label>
                <select id="exampleInputEmail" name="categoria" class="form-control form-control">
                    <option value="">-- Por favor seleccione una categoria --</option>
                    <?php
                    $query = "SELECT * FROM categoria ORDER BY nombre";
                    //echo $query;
                    $result = mysqli_query($con, $query);

                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            echo "<option value=" . $row['idcategoria'] . ">" . $row['nombre'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="txt">Referencia:</label>
                <input type="text" class="form-control form-control" name="referencia" id="exampleInputEmail" >
            </div>
            <div class="form-group col-md-4">
                <label for="txt">Stock:</label>
                <input type="text" class="form-control form-control" name="stock" id="exampleInputEmail" >

            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col-md-6">
                <label for="txt">Nombre:</label>
                <input type="text" class="form-control form-control" name="nombre" id="exampleInputEmail" >
            </div>
            <div class="form-group col-md-6">
                <label for="txt">Seccion:</label>
                <select id="inputState" name="seccion" class="form-control">
                    <option value="">-- Por favor seleccione --</option>
                    <option value="NIÑO">NIÑO</option>
                    <option value="NIÑA">NIÑA</option>
                    <option value="UNISEX">UNISEX</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col-md-12">
                <label for="txt">Descripcion:</label>
                <textarea class="form-control form-control" name="descripcion"></textarea>
            </div>
        </div>
        <button class="btn btn-primary">Guardar</button>
        <hr>
    </form>
    <hr>

</div>
