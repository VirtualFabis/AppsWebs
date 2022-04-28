<?php

    $connection = mysqli_connect("localhost","id14249956_fabis","Samdog88****","id14249956_db_web");
    
     $name = $_POST["name"];
     $email = $_POST["email"];
     $contact = $_POST["contact"];
     $address = $_POST["address"];
     
     $sql = "INSERT INTO data(name,email,contact,address) VALUES ('$name','$email','$contact','$address')";
     
     $result = mysqli_query($connection,$sql);
     
     if($result){
         echo "Data Inserted";
        
     }
     else{
         echo "Failed";
     }
     mysqli_close($connection);
     
          
    
    


?>