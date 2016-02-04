 <?php 
 $pagina = "ejemplos"; 
 //include 'header.php';  
 include "magia_plugins/ejemplos/funciones.php"; 
 if (permisos_tiene_permiso('borrar', 'ejemplos', $u_grupo)) { 
 $id 		= mysql_real_escape_string($_REQUEST['id']); 
 include "magia_plugins/ejemplos/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'ejemplos', $u_id_usuario); 
 } 
