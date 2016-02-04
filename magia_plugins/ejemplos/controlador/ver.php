 <?php 
 $pagina = "ejemplos"; 
 include 'header.php';  
 include "magia_plugins/ejemplos/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'ejemplos', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);   
     include "magia_plugins/ejemplos/modelos/ver.php"; 
     include "magia_plugins/ejemplos/reg/reg.php"; 
     include "magia_plugins/ejemplos/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'ejemplos', $u_id_usuario); 
 } 
