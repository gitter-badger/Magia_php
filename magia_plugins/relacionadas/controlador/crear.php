 <?php 
 $pagina = "relacionadas"; 
 //include 'header.php';  
 include "magia_plugins/relacionadas/funciones.php"; 
 if (permisos_tiene_permiso('crear', 'relacionadas', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $funcion_relacionada = mysql_real_escape_string($_REQUEST['funcion_relacionada']);     
 include "magia_plugins/relacionadas/modelos/crear.php";  
 include "magia_plugins/relacionadas/vista/crear.php";  
 }else{ 
 include "magia_plugins/relacionadas/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso('crear', 'relacionadas', $u_id_usuario); 
 } 
