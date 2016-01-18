 <?php 
 $pagina = "mama"; 
 include 'header.php';  
 include "./plugins/mama/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'mama', $u_grupo)) { 
     include "./plugins/mama/modelos/index.php"; 
     include "./plugins/mama/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'mama', $u_id_usuario); 
 } 
