 <?php 
  $id_usuario = mysql_real_escape_string($_REQUEST['id_usuario']); 
  $nombres = mysql_real_escape_string($_REQUEST['nombres']); 
  $email = mysql_real_escape_string($_REQUEST['email']); 
  $estatus = mysql_real_escape_string($_REQUEST['estatus']); 
