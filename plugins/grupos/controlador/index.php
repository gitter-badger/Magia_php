<?php
$pagina = "grupos";
include 'header.php';
include "./plugins/grupos/funciones.php";


switch ($a) {
    case 'editar':
    if (permisos_tiene_permiso('editar', 'grupos', $u_grupo)) {
        $id_grupo 		= mysql_real_escape_string($_REQUEST['id_grupo']);  
        $grupo 		= mysql_real_escape_string($_REQUEST['grupo']);  

        
        include "./plugins/grupos/modelos/editar.php";
    } else {
        permisos_sin_permiso('editar', 'grupos', $u_id_usuario);
    }
        break;
//----------------        
    case 'crear':
    if (permisos_tiene_permiso('crear', 'grupos', $u_grupo)) {         
        $grupo 		= mysql_real_escape_string($_REQUEST['grupo']);  
        include "./plugins/grupos/modelos/crear.php";
    } else {
        permisos_sin_permiso('crear', 'grupos', $u_id_usuario);
    }
        break;
//------------------        
    case 'borrar':
    if (permisos_tiene_permiso('borrar', 'grupos', $u_grupo)) {         
        $id_grupo 		= mysql_real_escape_string($_REQUEST['id_grupo']);  
        include "./plugins/grupos/modelos/borrar.php";
    } else {
        permisos_sin_permiso('borrar', 'grupos', $u_id_usuario);
    }
        break;

    default:
        break;
}






if (permisos_tiene_permiso('ver', 'grupos', $u_grupo)) {
    include "./plugins/grupos/modelos/index.php";
    include "./plugins/grupos/vista/index.php";
} else {
    permisos_sin_permiso('ver', 'grupos', $u_id_usuario);
}



?>

