 <?php 
 $pagina = "plugins"; 
 include 'header.php';  
 include "./plugins/plugins/funciones.php"; 
    if (permisos_tiene_permiso('crear', 'plugins', $u_grupo)) { 
       if(isset($_REQUEST['a'])=='crear'){ 
           
          $nombre 		= mysql_real_escape_string($_REQUEST['nombre']); 
          include "./plugins/plugins/modelos/crear.php";  
          include "./plugins/plugins/vista/crear.php";  
       }else{ 
          include "./plugins/plugins/vista/crear.php";  
       }          
    } else { 
        permisos_sin_permiso('crear', 'plugins', $u_id_usuario); 
    } 
