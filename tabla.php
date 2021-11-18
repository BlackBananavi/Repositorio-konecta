<?php
require_once 'model.php';

$consulta = 'SELECT * FROM productos';
$model = new Model();
$rows = $model->fetchAllRecords($consulta);
// die();
?>
<table id="tabla_registros" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre de producto</th>
			<th>Referencia</th>
			<th>Precio</th>
			<th>Peso</th>
			<th>Categoria</th>
			<th>Stock</th>
			<th>Fecha de creacion</th>
			<th>Fecha_ultima venta</th>
			<th>Editar</th>
			<th>Eliminar</th>
			<th>Vender</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$cons = 1;
		if(!empty($rows)){
			foreach($rows as $row){
				?>
				<tr>
					<td> <?php echo $id = $row['id'];?></td>
					<td> <?php echo $nombre_producto = $row['nombre_producto'];?></td>
					<td> <?php echo $referencia = $row['referencia'];?></td>
					<td> <?php echo $presio = $row['presio'];?></td>
					<td> <?php echo $peso = $row['peso'];?></td>
					<td> <?php echo $categoria = $row['categoria'];?></td>
					<td> <?php echo $stock = $row['stock'];?></td>
					<td> <?php echo $fecha_creacion = $row['fecha_creacion'];?></td>
					<td> <?php echo $fecha_ult_venta = $row['fecha_ult_venta'];?></td>

					<td>
						<center>
							<button type='button' class='btn btn-warning' id='Editar' data-id='<?php echo $id;?>'>
								Editar <sapn class='icon-edit'></sapn>
							</button>
						</center>
					</td>

					<td>
						<center>
							<button type='button' class='btn btn-danger' id='Eliminar' data-id='<?php echo $id;?>'>
								Eliminar <sapn class='icon-trash'></sapn>
							</button>
						</center>
					</td>

					<td>
						<center>
							<button type='button' class='btn btn-success' id='vender' data-id='<?php echo $id;?>'>
								Vender <sapn class='icon-check'></sapn>
							</button>
						</center>
					</td>
					
				</tr>
				<?php
			}
		}
		?>
	</tbody>
</table>