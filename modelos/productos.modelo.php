<?php

require_once "conexion.php";

class ModeloProductos{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarProductos($tabla, $item, $valor, $orden){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $orden DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE PRODUCTO
	=============================================*/
	static public function mdlIngresarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_categoria, codigo, descripcion, imagen, stock, precio_compra, precio_venta) VALUES (:id_categoria, :codigo, :descripcion, :imagen, :stock, :precio_compra, :precio_venta)");

		$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_compra", $datos["precio_compra"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_venta", $datos["precio_venta"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR PRODUCTO
	=============================================*/
	static public function mdlEditarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_categoria = :id_categoria, descripcion = :descripcion, imagen = :imagen, stock = :stock, precio_compra = :precio_compra, precio_venta = :precio_venta WHERE codigo = :codigo");

		$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_compra", $datos["precio_compra"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_venta", $datos["precio_venta"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	BORRAR PRODUCTO
	=============================================*/

	static public function mdlEliminarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR PRODUCTO
	=============================================*/

	static public function mdlActualizarProducto($tabla, $item1, $valor1, $valor){
		if($tabla == 'ventas'){

	
			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");
   
		   $stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		   $stmt -> bindParam(":id", $valor, PDO::PARAM_STR);
   
		   if($stmt -> execute()){
   
			   return "ok";
		   
		   }else{
   
			   return "error";	
   
		   }
   
		   $stmt -> close();
   
		   $stmt = null;
	   }

		echo('esto es del modelo'.'<br>');
/* 		var_dump($tabla.'<br>');*/
/* 		var_dump($item1.'<br>'); 
		echo $valor1.'<br>';
		echo $valor.'<br>';
		echo('esto aun es del modelo'.'<br>'); */

		if($tabla == 'productos'){
		switch ($valor) {
			case '27':
			$stmt = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
			$stmt2 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = 40"); 
/* 			$stmt3 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
			$stmt4 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
			$stmt5 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
			$stmt6 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
			$stmt7 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
			$stmt8 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
			$stmt9 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
			$stmt10 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
			$stmt11 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id"); */

			$valor1 = $valor1 + 0.5;
			$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
			$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		 	$stmt2 -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
 
			if($stmt -> execute() && $stmt2 -> execute() ){
	
				return "ok";
			
			}else{
	
				return "error";	
	
			}
	
			$stmt -> close();
	
			$stmt = null;
				break;

				case '40':
				$stmt = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
				$stmt2 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = 27"); 
	/* 			$stmt3 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
				$stmt4 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
				$stmt5 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
				$stmt6 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
				$stmt7 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
				$stmt8 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
				$stmt9 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
				$stmt10 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id");
				$stmt11 = Conexion::conectar()->prepare("UPDATE productos SET $item1 = :$item1 WHERE id = :id"); */

			
				$valor1 = $valor1 + 0.5; 
				echo $valor1;
				echo 'esto es valor1';
				$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
				$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);
	
				 $stmt2 -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
	 
				if($stmt -> execute() && $stmt2 -> execute() ){
		
					return "ok";
				
				}else{
		
					return "error";	
		
				}
		
				$stmt -> close();
		
				$stmt = null;
				break;	

			default:
				break;
		}
	}
	


	}

	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/	

	static public function mdlMostrarSumaVentas($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT SUM(ventas) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;
	}


}