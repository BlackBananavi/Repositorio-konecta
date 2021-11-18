<?php
	require_once 'model.php';
	$vender_id = $_POST['id'];
	$model = new Model();
	$row = $model->vender($vender_id);
?>