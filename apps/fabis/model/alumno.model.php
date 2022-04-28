<?php
class AlumnoModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=fabis', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
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

			$stm = $this->pdo->prepare("SELECT * FROM producto");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Alumno();

				$alm->__SET('id', $r->id);
				$alm->__SET('Codigo', $r->Codigo);
				$alm->__SET('Descripcion', $r->Descripcion);
				$alm->__SET('Precio', $r->Precio);
				$alm->__SET('Stock', $r->Stock);
				$alm->__SET('Foto', $r->Foto);


				$result[] = $alm;
			}

			return $result;
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
			->prepare("SELECT * FROM producto WHERE id = ?");


			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new Alumno();

			$alm->__SET('id', $r->id);
			$alm->__SET('Codigo', $r->Codigo);
			$alm->__SET('Descripcion', $r->Descripcion);
			$alm->__SET('Precio', $r->Precio);
			$alm->__SET('Stock', $r->Stock);
			$alm->__SET('Foto', $r->Foto);

			return $alm;
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
			->prepare("DELETE FROM producto WHERE id = ?  and Stock = '0'");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Alumno $data)
	{
		try 
		{
			$sql = "UPDATE producto SET 
			Codigo          = ?, 
			Descripcion        = ?,
			Precio            = ?, 
			Stock = ?,
			Foto            = ?
			WHERE id = ?";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->__GET('Codigo'), 
					$data->__GET('Descripcion'), 
					$data->__GET('Precio'),
					$data->__GET('Stock'),
					$data->__GET('Foto'),
					$data->__GET('id')
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
			$sql = "INSERT INTO producto (Codigo,Descripcion,Precio,Stock,Foto) 
			VALUES (?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->__GET('Codigo'), 
					$data->__GET('Descripcion'), 
					$data->__GET('Precio'),
					$data->__GET('Stock'),
					$data->__GET('Foto')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}