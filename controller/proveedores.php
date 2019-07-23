<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                     
                        <th>NOMBRE</th>
                        <th>DOCUMENTO</th>
                        <th>DIRECCION</th>
                        <th>CIUDAD</th>
                        <th>TELEFONO</th>
                        <th>EMAIL</th>
                        <th></th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM persona WHERE tipo_persona='P' ORDER BY name;";
                    //echo $query;
                    $result = mysqli_query($con, $query);
                    $sno = 1;
                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $msgid = $row['idpersona'];
                       
                            echo "<td>" . $row['name'] . "</td>";
                           
                            echo "<td>" . $row['numero_documento'] . "</td>";
                            echo "<td>" . $row['direccion'] . "</td>";
                            echo "<td>" . $row['ciudad'] . "</td>";
                            echo "<td>" . $row['telefono'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            $sno++;
                            echo "<td><form action='../app/sembrar.php' method='post'><input type='hidden' data-toggle='modal' data-target='#sembrar' name='name' value='" . $msgid . "'/><input type='submit' value='Actualizar' class='btn btn-primary'/></form></td></tr>";
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


