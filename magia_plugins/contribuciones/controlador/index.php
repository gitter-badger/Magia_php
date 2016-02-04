 <?php 
 $pagina = "contribuciones"; 
 //include 'header.php';  
 include "magia_plugins/contribuciones/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'contribuciones', $u_grupo)) { 
     include "magia_plugins/contribuciones/modelos/index.php"; 
     include "magia_plugins/contribuciones/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'contribuciones', $u_id_usuario); 
 } 
