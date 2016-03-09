 <?php 
 $sql = "INSERT INTO autores ( 
 id  ,  nombre  ,  apellidos  ,  email  ) VALUES ( 
 :id  ,  :nombre  ,  :apellidos  ,  :email    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id"=>"$id"  ,  ":nombre"=>"$nombre"  ,  ":apellidos"=>"$apellidos"  ,  ":email"=>"$email"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
