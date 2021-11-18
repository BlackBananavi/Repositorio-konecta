<?php 
	Class Model{
		private $host = 'localhost';
		private $username = 'root';
		private $password = '';
		private $database = 'konecta';
		private $connection;

		public function __construct(){
			try{
				$this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
			} 
			catch (PDOException $e) 
			{
				echo "Connection error " . $e->getMessage();
			}
		}

		public function fetchAllRecords($consulta){
			$data = null;
			$select = $this->connection->prepare($consulta);
			$select->execute();
			$data = $select->fetchAll();
			return $data;
		}

		public function insert(){

			if(!empty($_POST['nombre_producto']) && !empty($_POST['referencia']) && !empty($_POST['precio']) && !empty($_POST['peso']) && !empty($_POST['categoria']) && !empty($_POST['stock']) && !empty($_POST['fecha_creacion']) && !empty($_POST['fecha_utl_compra'])
			){
				$nombre_producto = $_POST['nombre_producto'];
				// echo "<br>";
				$referencia = $_POST['referencia'];
				// echo "<br>";
				$precio = $_POST['precio'];
				// echo "<br>";
				$peso = $_POST['peso'];
				// echo "<br>";
				$categoria = $_POST['categoria'];
				// echo "<br>";
				$stock = $_POST['stock'];
				// echo "<br>";
				$fecha_creacion = $_POST['fecha_creacion'];
				// echo "<br>";
				$fecha_utl_compra = $_POST['fecha_utl_compra'];
				// echo "<br>";

				
				$insert = $this->connection->prepare("
				INSERT INTO productos(nombre_producto, referencia, presio, peso, categoria, stock, fecha_creacion, fecha_ult_venta) 
				VALUES(
				'$nombre_producto',
				'$referencia',
				'$precio',
				'$peso',
				'$categoria',
				'$stock',
				'$fecha_creacion',
				'$fecha_utl_compra'
				)");
				$insert->execute();
				echo 1;
			}else{
				echo 2;
			}
		}

		public function edit($update_id){
			$data = null;
			$id = $update_id;
			$editar = $this->connection->prepare("SELECT * FROM productos WHERE id = '$id'");
			$editar->execute();
			$data = $editar->fetch(); 
			
			return $data;
		}

		public function update($data, $id){
			
			$id = $id;
			
			$nombre_producto = $data['nombre_producto'] = $_POST['nombre_producto'];
			
			$referencia = $data['referencia'] = $_POST['referencia'];
			
			$precio = $data['precio'] = $_POST['precio'];
			
			$peso = $data['peso'] = $_POST['peso'];
			
			$categoria = $data['categoria'] = $_POST['categoria'];
			
			$stock = $data['stock'] = $_POST['stock'];
			
			$fecha_creacion = $data['fecha_creacion'] = $_POST['fecha_creacion'];
			
			$fecha_utl_compra = $data['fecha_utl_compra'] = $_POST['fecha_utl_compra'];



			$update = $this->connection->prepare("
				UPDATE `productos` 
				SET `nombre_producto`='$nombre_producto',`referencia`='$referencia',`presio`='$precio',`peso`='$peso',`categoria`='$categoria',`stock`='$stock',`fecha_creacion`='$fecha_creacion',`fecha_ult_venta`= '$fecha_utl_compra' WHERE id = '$id'

				");
			$update->execute();

			if ($update->execute()) {
				echo 1;
			}
			
		}

		public function deleteRecords($id){
			$delete_id = $id;
			$delete = $this->connection->prepare("DELETE FROM productos WHERE id = '$delete_id'");
			$delete->execute();
			
			if ($delete->execute()){
				echo 1;
			}		
		}

		public function vender($vender_id){
			$id = $vender_id;
			$sql = $this->connection->prepare("SELECT productos.stock FROM productos WHERE id = '$id'");
			$sql->execute();
			$row = $sql->fetchAll(PDO::FETCH_ASSOC);
			foreach ($row as $rows) {
				# code...
			}
			// $update = $this->connection->prepare("
			// 	UPDATE `productos` 
			// 	SET `nombre_producto`='$nombre_producto',`referencia`='$referencia',`presio`='$precio',`peso`='$peso',`categoria`='$categoria',`stock`='$stock',`fecha_creacion`='$fecha_creacion',`fecha_ult_venta`= '$fecha_utl_compra' WHERE id = '$id'

			// 	");
			// $update->execute();

			// if ($update->execute()) {
			// 	echo 1;
			// }

		}
	}
?>   