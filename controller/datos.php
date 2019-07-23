
<?php 
include 'db_conn.php';
page_protect();
$idarticulo=$_POST['idarticulo'];

	$sql="SELECT iddetalle_gasto, idarticulo, precio_venta from detalle_gasto where idarticulo='$idarticulo'";

	$result=mysqli_query($con,$sql);
        $cadena="";
	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.utf8_encode($ver[2]);
	}
       $cade=$cadena;
?>


    <label form="uname">Valor Unitario:</label>
<input type="text" class="form-control " required="" name="valorUnitario" value="<?php echo $cade;?>"/>
