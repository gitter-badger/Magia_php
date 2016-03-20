<?php
//$id_contacto 			= mysql_real_escape_string($_GET['id_contacto']);
if (permisos_tiene_permiso("ver", "home", $u_grupo) == true) {
    //include "contactos/modelos/index.php";
    include "contactos/vista/index.php";
} else {
    permisos_sin_permiso();
}