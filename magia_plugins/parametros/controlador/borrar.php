 <?php 
 $pagina = "parametros"; 
 //include 'header.php';  
 include "magia_plugins/parametros/funciones.php"; 
 if (permisos_tiene_permiso('borrar', 'parametros', $u_grupo)) { 
 $id 		= mysql_real_escape_string($_REQUEST['id']); 
 include "magia_plugins/parametros/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'parametros', $u_id_usuario); 
 } 
