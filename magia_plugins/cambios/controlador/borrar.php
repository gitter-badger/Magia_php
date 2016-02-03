<?php

$pagina = "cambios";
//include 'header.php';  
include "magia_plugins/cambios/funciones.php";
if (permisos_tiene_permiso('borrar', 'cambios', $u_grupo)) {
    $id = mysql_real_escape_string($_REQUEST['id']);
    include "magia_plugins/cambios/modelos/borrar.php";
} else {
    permisos_sin_permiso('borrar', 'cambios', $u_id_usuario);
} 
