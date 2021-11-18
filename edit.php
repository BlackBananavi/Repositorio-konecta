<?php
	require_once 'model.php';
	require_once 'lib/helpers.php';
	$update_id = $_POST['id'];
	$model = new Model();
	$row = $model->edit($update_id);
	if(!empty($row)){

	// dd($row);
	// die();
	// <br /><b>Notice</b>:  Undefined index: fecha_utl_venta in <b>C:\xampp\htdocs\konecta\edit.php</b> on line <b>75</b><br />
?>
<div class="container" style="width: auto;">
	<div class="row">
		<form style="padding: 10px 50px 10px;" id="form_editar">

		<div class="form-group hidden">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">ID *</label>
			<div class="col-md-6 col-sm-9 col-xs-12 ">
				<input value="<?php echo $row['id'];?>" name="id" type="text" class="form-control" id="id" placeholder="Nombre producto" />
			</div>
		</div>
		<br>
		<br>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre Producto *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input value="<?php echo $row['nombre_producto'];?>" name="nombre_producto" type="text" class="form-control" id="nombre_producto" placeholder="Nombre producto" />
			</div>
		</div>
		<br>
		<br>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Referencia *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input value="<?php echo $row['referencia'];?>" name="referencia" type="text" class="form-control" id="referencia" placeholder="Referencia" />
			</div>
		</div>
		<br>
		<br>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Precio *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input value="<?php echo $row['presio'];?>" name="precio" type="number" class="form-control" id="precio" placeholder="Precio" />
			</div>
		</div>
		<br>
		<br>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Peso *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input value="<?php echo $row['peso'];?>" name="peso" type="number" class="form-control" id="peso" placeholder="Peso" />
			</div>
		</div>
		<br>
		<br>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Categoria *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input value="<?php echo $row['categoria'];?>" name="categoria" type="text" class="form-control" id="categoria" placeholder="Categoria" />
			</div>
		</div>
		<br>
		<br>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Stock *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input value="<?php echo $row['stock'];?>" name="stock" type="number" class="form-control" id="stock" placeholder="Cantidad del producto en bodega" />
			</div>
		</div>
		<br>
		<br>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de creacion *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input value="<?php echo $row['fecha_creacion'];?>" name="fecha_creacion" type="text" class="form-control datepicker" id="fecha_creacion" placeholder="dia / mes / año">
			</div>
		</div>
		<br>
		<br>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de ultima venta *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input value="<?php echo $row['fecha_ult_venta'];?>" name="fecha_utl_compra" type="text" class="form-control datepicker" id="fecha_utl_compra datetimepicker"  placeholder="dia / mes / año">
			</div>
		</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$(".datepicker").datepicker({
		// dateFormat: "dd-mm-yy"
		dateFormat: "yy-mm-dd"
	});
</script>
<?php
}
?> 