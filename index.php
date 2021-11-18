<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">

	<!-- css boostrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<!-- css datatable bootstrap -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" >
	<!-- css toast -->
	<link rel="stylesheet" href="toast/src/jquery.toast.css" type="text/css">
	<!-- css iconos fontelo.com -->
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<!-- css pagina general y css del menu -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- css botones de datatable -->
	<link rel="stylesheet" media="screen" href="buttons dataTables/css/buttons.dataTables.min.css">
	<!-- select_live -->
	<link rel="stylesheet" media="screen" href="select_live/css/bootstrap-select.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" href="css/jquery-ui.css">
	<!-- datetimepicker -->
	<link rel="stylesheet" href="css/jquery.datetimepicker.css"/ >
</head>
<body>
	
	<!-- formulario -->
	<div class="form-group" style="margin-right: 27%; margin-left: 15%; padding: 80px 0px 0px 0px;">
		<!-- <h4 style="color: gray;">Prototipo de formulario para crear y modificar</h4> -->
		<label style="margin-bottom: 0px;"><h1 style="margin-top: 0px; margin-bottom: 10px;">Productos</h1></label>
	</div>

	<form id="productos" method="post" class="form-horizontal" style="padding: 0px 50px;">
		
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre Producto *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input name="nombre_producto" type="text" class="form-control" id="nombre_producto" placeholder="Nombre producto" />
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Referencia *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input name="referencia" type="text" class="form-control" id="referencia" placeholder="Referencia" />
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Precio *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input name="precio" type="number" class="form-control" id="precio" placeholder="Precio" />
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Peso *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input name="peso" type="number" class="form-control" id="peso" placeholder="Peso" />
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Categoria *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input name="categoria" type="text" class="form-control" id="categoria" placeholder="Categoria" />
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Stock *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input name="stock" type="number" class="form-control" id="stock" placeholder="Cantidad del producto en bodega" />
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de creacion *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input name="fecha_creacion" type="text" class="form-control datepicker" id="fecha_creacion" placeholder="dia / mes / año">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de ultima venta *</label>
			<div class="col-md-6 col-sm-9 col-xs-12">
				<input name="fecha_utl_compra" type="text" class="form-control datepicker" id="fecha_utl_compra datetimepicker"  placeholder="dia / mes / año">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-6 m-t-15">
				<button type="button" id="registrar" class="btn btn-primary">Guardar</button>
			</div>
		</div>
	</form>
	
	
	<!-- formulario -->
	<!-- tabla -->
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title" style="margin-left: 98%;">
					<a data-toggle="collapse" href="#collapse1" class="icon-down-open" aria-expanded="true"></a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse in" aria-expanded="true">

				<div class="container s-panel">
					<div class="row" style="padding: 30px 50px">
						<div id="tabla"></div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- tabla -->
	<!-- contenido -->

	<!-- scripst jquery datatables -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<!-- botones datatables -->
	<script src="buttons dataTables/js/dataTables.buttons.min.js"></script>
	<script src="buttons dataTables/js/buttons.flash.min.js"></script>
	<script src="buttons dataTables/js/jszip.min.js"></script>
	<script src="buttons dataTables/js/pdfmake.min.js"></script>
	<script src="buttons dataTables/js/vfs_fonts.js"></script>
	<script src="buttons dataTables/js/buttons.html5.min.js"></script>
	<script src="buttons dataTables/js/buttons.print.min.js"></script>
	<!-- toast -->
	<script src="toast/src/jquery.toast.js"></script>
	<!-- datepicker -->
	<script src="js/jquery-ui.js"></script>
	<!-- datetimepicker -->
	<script src="js/jquery.datetimepicker.js"></script>

	<script src="js/index.js" type="text/javascript"></script>
</body>
</html>


<!-- Modal Editar_compra-->
<div class="modal fade editar_compra" id="myModal" role="dialog" style="margin-top: 40px;">
	<div class="modal-dialog" style="width: 55%;">

		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body">
				<div id="contenido_modal"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="editar">Editar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		
	</div>
</div>
