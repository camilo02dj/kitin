
<!-- Nested Row within Card Body -->

<div class="p-0">
    <form action="../controller/registrarPersona.php" method="post" class="user">
        <input type="hidden" name="tipoPersona" value="P">
        <div class="form-group row">
        </div>
        <div class="form-group">
            <label for="txt">Tipo de Documento:</label>
            <select id="exampleInputEmail" name="tipoDocumento" class="form-control">
                <option value="">--Por Favor Seleccione--</option>
                <option value="CC">Cedula</option>
                <option value="NIT">Nit</option>
            </select>
        </div>
        <div class="form-group">
            <label for="txt">Numero de Documento:</label>
            <input type="number" class="form-control" name="documento" id="exampleInputEmail">
        </div>
        <div class="form-group">
            <label for="txt">Nombre o Razon Social:</label>
            <input type="txt" class="form-control" name="name" id="exampleInputEmail">
        </div>
        <div class="form-group">
            <label for="txt">Direccion:</label>
            <input type="text" class="form-control" name="direccion" id="exampleInputEmail">
        </div>
        <div class="form-group">
            <label for="txt">Ciudad:</label>
            <input type="text" class="form-control" name="ciudad" id="exampleInputEmail">
        </div>
        <div class="form-group">
            <label for="txt">Telefono:</label>
            <input type="tel" class="form-control" name="telefono" id="exampleInputEmail">
        </div>
        <div class="form-group">
            <label for="txt">Email:</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail">
        </div>
        <button class="btn btn-primary">Guardar</button>
        <hr>
    </form>
    <hr>

</div>

