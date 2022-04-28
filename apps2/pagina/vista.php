<?php
if(!empty($_GET['id'])){
    //Credenciales de conexion local
    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'db_longblob';

    //Remota
    //$Host = 'localhost';
    //$Username = 'id13771801_sebastian';
    //$Password = '#hl%AGo(7J~]ikes';
    //$dbName = 'id13771801_db_web';
    
    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Extraer imagen de la BD mediante GET
     $result = $db->query("SELECT imagenes FROM images_tabla WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['imagenes']; 
    }else{
        echo 'Imagen no existe...';
    }
}
?>