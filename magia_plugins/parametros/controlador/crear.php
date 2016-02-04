 <?php 
 $pagina = "parametros"; 
 //include 'header.php';  
 include "magia_plugins/parametros/funciones.php"; 
 if (permisos_tiene_permiso('crear', 'parametros', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $parametro = mysql_real_escape_string($_REQUEST['parametro']);     
  $descripcion = mysql_real_escape_string($_REQUEST['descripcion']);     
 include "magia_plugins/parametros/modelos/crear.php";  
 include "magia_plugins/parametros/vista/crear.php";  
 }else{ 
 include "magia_plugins/parametros/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso('crear', 'parametros', $u_id_usuario); 
 } 
