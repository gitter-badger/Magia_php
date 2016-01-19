 <?php 
 $pagina = "plugins"; 
 include 'header.php';  
 include "./plugins/plugins/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'plugins', $u_grupo)) { 
     include "./plugins/plugins/modelos/index.php"; 
     include "./plugins/plugins/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'plugins', $u_id_usuario); 
 } 
