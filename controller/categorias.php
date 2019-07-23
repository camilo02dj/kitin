<div class="card shadow mb-4">
  
    <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>CATEGORIA</th>
                        <th>DESCRIPCION</th>
                       
                        <th></th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $query = "SELECT * FROM categoria ORDER BY categoria.nombre;";
                    //echo $query;
                    $result = mysqli_query($con, $query);
                    $sno = 1;
                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $msgid = $row['idcategoria'];
                            echo "<tr><td>" . $sno . "</td>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            echo "<td>" . $row['descripcion'] . "</td>";
                         
                            $sno++;
                            echo "<td><form action='../app/sembrar.php' method='post'><input type='hidden' data-toggle='modal' data-target='#sembrar' name='name' value='" . $msgid . "'/><input type='submit' value='Actualizar' class='btn btn-info'/></form></td></tr>";
                            $msgid = 0;
                        }
                    }
                    ?>									
                </tbody>
            </table>
        </div>
    </div>
</div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>







