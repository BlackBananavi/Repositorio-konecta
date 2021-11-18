<?php
	if(!empty($_POST['id']) && !empty($_POST['nombre_producto']) && !empty($_POST['referencia']) && !empty($_POST['precio']) && !empty($_POST['peso']) && !empty($_POST['categoria']) && !empty($_POST['stock']) && !empty($_POST['fecha_creacion']) && !empty($_POST['fecha_utl_compra'])
			){


		$id = $_POST['id'];
		$data['nombre_producto'] = $_POST['nombre_producto'];
		$data['referencia'] = $_POST['referencia'];
		$data['precio'] = $_POST['precio'];
		$data['peso'] = $_POST['peso'];
		$data['categoria'] = $_POST['categoria'];
		$data['stock'] = $_POST['stock'];
		$data['fecha_creacion'] = $_POST['fecha_creacion'];
		$data['fecha_utl_compra'] = $_POST['fecha_utl_compra'];
		
		require_once 'model.php';
		$model = new Model();
		$update = $model->update($data, $id);		

	}
?>