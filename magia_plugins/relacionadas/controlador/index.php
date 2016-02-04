 <?php 
 $pagina = "relacionadas"; 
 //include 'header.php';  
 include "magia_plugins/relacionadas/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'relacionadas', $u_grupo)) { 
     include "magia_plugins/relacionadas/modelos/index.php"; 
     include "magia_plugins/relacionadas/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'relacionadas', $u_id_usuario); 
 } 
