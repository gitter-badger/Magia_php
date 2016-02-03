 <?php 
 $pagina = "ejemplos"; 
 //include 'header.php';  
 include "magia_plugins/ejemplos/funciones.php"; 
 if (permisos_tiene_permiso('crear', 'ejemplos', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $ejemplo = mysql_real_escape_string($_REQUEST['ejemplo']);     
 include "magia_plugins/ejemplos/modelos/crear.php";  
 include "magia_plugins/ejemplos/vista/crear.php";  
 }else{ 
 include "magia_plugins/ejemplos/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso('crear', 'ejemplos', $u_id_usuario); 
 } 
