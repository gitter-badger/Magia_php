 <?php 
 $pagina = "articulos"; 
 if (permisos_tiene_permiso('crear', 'articulos', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $titulo = mysql_real_escape_string($_REQUEST['titulo']);     
  $contenido = mysql_real_escape_string($_REQUEST['contenido']);     
  $id_autor = mysql_real_escape_string($_REQUEST['id_autor']);     
  $fecha = mysql_real_escape_string($_REQUEST['fecha']);     
  $estatus = mysql_real_escape_string($_REQUEST['estatus']);     
 include "../admin/articulos/modelos/crear.php";  
 include "../admin/articulos/vista/crear.php";  
 }else{ 
 include "../admin/articulos/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso('crear', 'articulos', $u_id_usuario); 
 } 
