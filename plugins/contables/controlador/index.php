<?php
include 'header.php';
include "./plugins/contables/funciones.php";
$pagina = "contables";
if (permisos_tiene_permiso('ver', 'contables', $u_grupo)) {
    include "./plugins/contables/modelos/index.php";
    include "./plugins/contables/vista/index.php";
} else {
    permisos_sin_permiso('ver', 'contables', $u_id_usuario);
}
