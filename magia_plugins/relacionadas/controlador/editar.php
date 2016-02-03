 <?php 
 $pagina = "relacionadas"; 
 //include 'header.php'; 
 include "magia_plugins/relacionadas/funciones.php"; 
 if (permisos_tiene_permiso('editar', 'relacionadas', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $funcion_relacionada = mysql_real_escape_string($_REQUEST['funcion_relacionada']);     
 include "magia_plugins/relacionadas/modelos/editar.php";  
 include "magia_plugins/relacionadas/vista/editar.php";  
 }else{ 
 $id = mysql_real_escape_string($_REQUEST['id']);      
 include "magia_plugins/relacionadas/modelos/ver.php"; 
 include "magia_plugins/relacionadas/reg/reg.php"; 
 include "magia_plugins/relacionadas/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso('editar', 'relacionadas', $u_id_usuario); 
 } 
