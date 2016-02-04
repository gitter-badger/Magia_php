 <?php 
 $pagina = "ejemplos"; 
 //include 'header.php'; 
 include "magia_plugins/ejemplos/funciones.php"; 
 if (permisos_tiene_permiso('editar', 'ejemplos', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $ejemplo = mysql_real_escape_string($_REQUEST['ejemplo']);     
 include "magia_plugins/ejemplos/modelos/editar.php";  
 include "magia_plugins/ejemplos/vista/editar.php";  
 }else{ 
 $id = mysql_real_escape_string($_REQUEST['id']);      
 include "magia_plugins/ejemplos/modelos/ver.php"; 
 include "magia_plugins/ejemplos/reg/reg.php"; 
 include "magia_plugins/ejemplos/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso('editar', 'ejemplos', $u_id_usuario); 
 } 
