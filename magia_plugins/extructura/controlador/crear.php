 <?php 
 $pagina = "extructura"; 
 //include 'header.php';  
 include "magia_plugins/extructura/funciones.php"; 
 if (permisos_tiene_permiso('crear', 'extructura', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $descripcion = mysql_real_escape_string($_REQUEST['descripcion']);     
  $valor_entrega = mysql_real_escape_string($_REQUEST['valor_entrega']);     
  $errores = mysql_real_escape_string($_REQUEST['errores']);     
 include "magia_plugins/extructura/modelos/crear.php";  
 include "magia_plugins/extructura/vista/crear.php";  
 }else{ 
 include "magia_plugins/extructura/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso('crear', 'extructura', $u_id_usuario); 
 } 
