 <?php 
 $pagina = "plugins"; 
 include 'header.php'; 
 include "./plugins/plugins/funciones.php"; 
    if (permisos_tiene_permiso('editar', 'plugins', $u_grupo)) { 
       if(isset($_REQUEST['a'])=='editar'){ 
          include "./plugins/plugins/modelos/editar.php";  
          include "./plugins/plugins/vista/editar.php";  
       }else{ 
          $id = mysql_real_escape_string($_REQUEST['id']);      
          include "./plugins/plugins/modelos/ver.php"; 
          include "./plugins/plugins/reg/reg.php"; 
          include "./plugins/plugins/vista/editar.php"; 
       }  
    } else { 
    permisos_sin_permiso('editar', 'plugins', $u_id_usuario); 
    } 
