<?php 
$sql = "INSERT INTO demo (
id_usuario,nombres,apellidos,usuario,clave,grupo ) VALUES (
:id_usuario,
:nombres,
:apellidos,
:usuario,
:clave,
:grupo
 )";  $stmt = $dbh->prepare($sql);
 $stmt->execute(array(
 ":id_usuario"=>"$id_usuario",
 ":nombres"=>"$nombres",
 ":apellidos"=>"$apellidos",
 ":usuario"=>"$usuario",
 ":clave"=>"$clave",
 ":grupo"=>"$grupo"
      )
 );
 $mensaje = "Realizado con exito";
 