 <?php 
 $pagina = "extructura"; 
 //include 'header.php'; 
 include "magia_plugins/extructura/funciones.php"; 
 if (permisos_tiene_permiso('editar', 'extructura', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $descripcion = mysql_real_escape_string($_REQUEST['descripcion']);     
  $valor_entrega = mysql_real_escape_string($_REQUEST['valor_entrega']);     
  $errores = mysql_real_escape_string($_REQUEST['errores']);     
 include "magia_plugins/extructura/modelos/editar.php";  
 include "magia_plugins/extructura/vista/editar.php";  
 }else{ 
 $id = mysql_real_escape_string($_REQUEST['id']);      
 include "magia_plugins/extructura/modelos/ver.php"; 
 include "magia_plugins/extructura/reg/reg.php"; 
 include "magia_plugins/extructura/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso('editar', 'extructura', $u_id_usuario); 
 } 
