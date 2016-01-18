 <?php 
 $pagina = "mama"; 
 include 'header.php';  
 include "./plugins/mama/funciones.php"; 
 if (permisos_tiene_permiso('editar', 'mama', $u_grupo)) { 
     include "./plugins/mama/modelos/detalles.php"; 
     include "./plugins/mama/reg/reg.php"; 
     include "./plugins/mama/vista/editar.php"; 
 } else { 
     permisos_sin_permiso('editar', 'mama', $u_id_usuario); 
 } 
