<?php
include("conexion.php");
class TablaDatos{

	private $id;
	private $titulo;
	private $imagen;
	private $con;

	public function __construct(){
$con = mysqli_connect("localhost","root","","db_agenda") or die("Error De Conexion");


	}
	public function set($atributo, $contenido){
		$this->$atributo = $contenido;
	}	
	public function get($atributo){
		return $this->$atributo;
	}
	
	public function listar(){
$con = mysqli_connect("localhost","root","","db_agenda") or die("Error De Conexion");
		$sql = mysqli_query($con,"SELECT * FROM imagenes");		
		while($data=mysqli_fetch_array($sql)){
			echo "Titulo: <b>".$data['titulo']."</b>";
			echo'<img src="data:image/jpeg;base64,'.base64_encode($data['img']).'" class="img-responsive img-rounded ">';	
			echo'<a href="javascript:preEditImg('.$data['id'].');" class="btn btn-success"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Pre-Editar</a>';
			echo'<a href="javascript:deleteImg('.$data['id'].');" class="btn btn-danger"><span  style="padding-left: 10px" class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Eliminar</a>';		
			echo "<hr><br>";
		}		
	}
	public function getOneImg(){
$con = mysqli_connect("localhost","root","","db_agenda") or die("Error De Conexion");
		$idImg=$this->id;
		$sql=mysqli_query($con,"SELECT * FROM imagenes WHERE id=".$idImg."");		
		
		if($data=mysqli_fetch_array($sql)){
			echo'<img src="data:image/jpeg;base64,'.base64_encode($data['img']).'" class="img-responsive img-rounded ">';	
		}	
	}
	public function getTitle(){
$con = mysqli_connect("localhost","root","","db_agenda") or die("Error De Conexion");
		$idImg=$this->id;
		$sql=mysqli_query($con,"SELECT * FROM imagenes WHERE id=".$idImg."");				
		if($data=mysqli_fetch_array($sql)){
			echo $data['titulo'];	
		}	
	}
	public function editDataSinImg(){
$con = mysqli_connect("localhost","root","","db_agenda") or die("Error De Conexion");
		$id=$this->id;
		$titulo=$this->titulo;	
		mysqli_query($con,"UPDATE imagenes SET titulo= '".$titulo."' WHERE id='".$id."'");
	}
	public function editConImg(){
$con = mysqli_connect("localhost","root","","db_agenda") or die("Error De Conexion");
		$id=$this->id;
		$titulo=$this->titulo;	
		$imgData=$this->imagen;
		mysqli_query($con,"UPDATE imagenes SET img='{$imgData}', titulo='".$titulo."' WHERE id=".$id."");
	}		
	public function ingresoImg(){
$con = mysqli_connect("localhost","root","","db_agenda") or die("Error De Conexion");
		$titulo=$this->titulo;	
		$imgData=$this->imagen;
		mysqli_query($con,"INSERT INTO imagenes VALUES (0,'".$titulo."','{$imgData}')");		
	}
	public function deleteData(){
$con = mysqli_connect("localhost","root","","db_agenda") or die("Error De Conexion");
		$idImg=$this->id;
		mysqli_query($con,"DELETE FROM imagenes WHERE id='".$idImg."'");
	}
	
}
?>