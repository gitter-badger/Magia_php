 <?php 
 $pagina = "autores"; 
 if (permisos_tiene_permiso('crear', 'autores', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $nombre = mysql_real_escape_string($_REQUEST['nombre']);     
  $apellidos = mysql_real_escape_string($_REQUEST['apellidos']);     
  $email = mysql_real_escape_string($_REQUEST['email']);     
 include "../admin/autores/modelos/crear.php";  
 include "../admin/autores/vista/crear.php";  
 }else{ 
 include "../admin/autores/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso('crear', 'autores', $u_id_usuario); 
 } 
