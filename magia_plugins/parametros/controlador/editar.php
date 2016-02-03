 <?php 
 $pagina = "parametros"; 
 //include 'header.php'; 
 include "magia_plugins/parametros/funciones.php"; 
 if (permisos_tiene_permiso('editar', 'parametros', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $parametro = mysql_real_escape_string($_REQUEST['parametro']);     
  $descripcion = mysql_real_escape_string($_REQUEST['descripcion']);     
 include "magia_plugins/parametros/modelos/editar.php";  
 include "magia_plugins/parametros/vista/editar.php";  
 }else{ 
 $id = mysql_real_escape_string($_REQUEST['id']);      
 include "magia_plugins/parametros/modelos/ver.php"; 
 include "magia_plugins/parametros/reg/reg.php"; 
 include "magia_plugins/parametros/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso('editar', 'parametros', $u_id_usuario); 
 } 
