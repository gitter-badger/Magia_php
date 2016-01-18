<?php
$pagina = "grupos";
include 'header.php';
include "./plugins/grupos/funciones.php";
if (permisos_tiene_permiso('ver', 'grupos', $u_grupo)) {
    $id_grupos 		= mysql_real_escape_string($_REQUEST['id_grupos']);     
    include "./plugins/grupos/modelos/detalles.php";
    include "./plugins/grupos/reg/reg.php";
    include "./plugins/grupos/vista/detalles.php";
} else {
    permisos_sin_permiso('ver', 'grupos', $u_id_usuario);
}
?>
