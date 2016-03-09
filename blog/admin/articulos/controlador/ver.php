 <?php 
 $pagina = "articulos"; 
 if (permisos_tiene_permiso('ver', 'articulos', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);   
     include "../admin/articulos/modelos/ver.php"; 
     include "../admin/articulos/reg/reg.php"; 
     include "../admin/articulos/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'articulos', $u_id_usuario); 
 } 
