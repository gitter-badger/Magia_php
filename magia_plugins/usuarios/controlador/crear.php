 <?php 
 $pagina = "usuarios"; 
 //include 'header.php';  
 include "magia_plugins/usuarios/funciones.php"; 
 if (permisos_tiene_permiso('crear', 'usuarios', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 $id_usuario = mysql_real_escape_string($_REQUEST['id_usuario']);     
  $nombres = mysql_real_escape_string($_REQUEST['nombres']);     
  $email = mysql_real_escape_string($_REQUEST['email']);     
  $estatus = mysql_real_escape_string($_REQUEST['estatus']);     
 include "magia_plugins/usuarios/modelos/crear.php";  
 include "magia_plugins/usuarios/vista/crear.php";  
 }else{ 
 include "magia_plugins/usuarios/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso('crear', 'usuarios', $u_id_usuario); 
 } 
