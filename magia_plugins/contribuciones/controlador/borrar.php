 <?php 
 $pagina = "contribuciones"; 
 //include 'header.php';  
 include "magia_plugins/contribuciones/funciones.php"; 
 if (permisos_tiene_permiso('borrar', 'contribuciones', $u_grupo)) { 
 $id 		= mysql_real_escape_string($_REQUEST['id']); 
 include "magia_plugins/contribuciones/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'contribuciones', $u_id_usuario); 
 } 
