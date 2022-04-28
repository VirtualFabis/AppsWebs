<?php
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
        //Credenciales Mysql
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'db_longblob';

        //Remota
        //$Host = 'localhost';
        //$Username = 'id13771801_sebastian';
        //$Password = '#hl%AGo(7J~]ikes';
        //$dbName = 'id13771801_db_web';
        
        //Crear conexion con la base de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into images_tabla (imagenes, creado) VALUES ('$imgContenido', now())");
		// COndicional para verificar la subida del fichero
        if($insertar){
            echo "Archivo Subido Correctamente.";
        }else{
            echo "Formato de imagen no valido, asegurese de que sea formato jpg.";
        } 
		// Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione una imagen a subir.";
    }
}
?>