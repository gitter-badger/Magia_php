 <?php 
 $sql = "INSERT INTO contribuciones ( 
 id  ,  funcion  ,  id_usuario  ,  contribucion  ,  fecha  ,  estatus  ) VALUES ( 
 :id  ,  :funcion  ,  :id_usuario  ,  :contribucion  ,  :fecha  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id"=>"$id"  ,  ":funcion"=>"$funcion"  ,  ":id_usuario"=>"$id_usuario"  ,  ":contribucion"=>"$contribucion"  ,  ":fecha"=>"$fecha"  ,  ":estatus"=>"$estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
