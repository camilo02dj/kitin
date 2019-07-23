<div class="align-items-center justify-content-between mb-4">
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary" shadow-sm data-toggle="modal" data-target="#venta"><i class="fas fa-credit-card fa-sm text-white-50"></i> Nueva Venta</a>
</div>
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>

                        <th>FECHA</th>
                        <th>CLIENTE</th>
                        <th>TOTAL</th>
 
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM venta INNER JOIN persona ON venta.idclient=persona.idpersona  ORDER BY fecha;";
                    //echo $query;
                    $result = mysqli_query($con, $query);
                    $sno = 1;
                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $msgid = $row['idventa'];
                            echo "<td>" . $row['fecha'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['total_venta'] . "</td></tr>";
                            $sno++;
                           
                        }
                    }
                    ?>									
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
