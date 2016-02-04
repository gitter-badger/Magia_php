 <?php 
 $pagina = "extructura"; 
 //include 'header.php';  
 include "magia_plugins/extructura/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'extructura', $u_grupo)) { 
     include "magia_plugins/extructura/modelos/index.php"; 
     include "magia_plugins/extructura/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'extructura', $u_id_usuario); 
 } 
