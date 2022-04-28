<?php
class Alumno
{
	private $pdo;

	public $id;
	public $codigo;
	public $descripcion;
	public $costo;
	public $stock;
	public $imagen;
	

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM productos");
			$stm->execute();


			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			->prepare("SELECT * FROM productos WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			->prepare("DELETE FROM productos WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE alumnos SET 
			codigo          = ?, 
			descripcion        = ?,
			costo        = ?,
			stock            = ?, 
			imagen = ?
			WHERE id = ?";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->codigo,
					$data->descripcion, 
					$data->costo, 
					$data->stock,
					$data->imagen,
					$data->id
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Alumno $data)
	{
		try 
		{
	$imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];
  
  
   $upload_dir = 'user_images/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   $imagen = rand(1000,1000000).".".$imgExt;
    
  ¿
			$sql = "INSERT INTO productos (codigo,descripcion,costo,stock,imagen) 
			VALUES (?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->codigo,
					$data->descripcion, 
					$data->costo, 
					$data->stock,
					$data->imagen
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}