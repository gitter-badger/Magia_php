<?php
$pagina = "grupos";
include 'header.php';
include "./plugins/grupos/funciones.php";
if (permisos_tiene_permiso('crear', 'grupos', $u_grupo)) {
    include "./plugins/grupos/modelos/index.php";
    include "./plugins/grupos/vista/index.php";
} else {
    permisos_sin_permiso('crear', 'grupos', $u_id_usuario);
}
?>

