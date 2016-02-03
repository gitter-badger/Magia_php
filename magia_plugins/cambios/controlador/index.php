 <?php 
 $pagina = "cambios"; 
 //include 'header.php';  
 include "magia_plugins/cambios/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'cambios', $u_grupo)) { 
     include "magia_plugins/cambios/modelos/index.php"; 
     include "magia_plugins/cambios/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'cambios', $u_id_usuario); 
 } 
