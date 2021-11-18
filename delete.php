<?php
	require_once 'model.php';
	$id = $_POST['delete_id'];
	$model = new Model();
	$delete = $model->deleteRecords($id);
?>
