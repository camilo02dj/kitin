<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                     
                        <th>FECHA</th>
                        <th>PROVEEDOR</th>
                        <th>TOTAL</th>
                     

                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM gastos INNER JOIN persona ON gastos.idprovedor=persona.idpersona  ORDER BY fecha;";
                    //echo $query;
                    $result = mysqli_query($con, $query);
                    $sno = 1;
                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $msgid = $row['idgasto'];
                            echo "<td>" . $row['fecha'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['total_gasto'] . "</td></tr>";
                            $sno++;
                            
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
