 <?php 
 $pagina = "autores"; 
 if (permisos_tiene_permiso('ver', 'autores', $u_grupo)) { 
     include "../admin/autores/modelos/index.php"; 
     include "../admin/autores/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'autores', $u_id_usuario); 
 } 
