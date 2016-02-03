 <?php 
 $pagina = "contribuciones"; 
 //include 'header.php';  
 include "magia_plugins/contribuciones/funciones.php"; 
 if (permisos_tiene_permiso('crear', 'contribuciones', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $id_usuario = mysql_real_escape_string($_REQUEST['id_usuario']);     
  $contribucion = mysql_real_escape_string($_REQUEST['contribucion']);     
  $fecha = mysql_real_escape_string($_REQUEST['fecha']);     
  $estatus = mysql_real_escape_string($_REQUEST['estatus']);     
 include "magia_plugins/contribuciones/modelos/crear.php";  
 include "magia_plugins/contribuciones/vista/crear.php";  
 }else{ 
 include "magia_plugins/contribuciones/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso('crear', 'contribuciones', $u_id_usuario); 
 } 
