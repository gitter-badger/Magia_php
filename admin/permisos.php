<?php	 
function permisos_tiene_permiso($accion,$pagina,$u_grupo){

$permiso = permisos_pagina_u_grupo ($pagina,$u_grupo  );

switch ($accion) {
    case "ver": //      
		if ( $permiso[0] == "1" ) {return true; } else {return false; }
		break;

    case "crear": 
		if ( $permiso[1] == "1" ) {return true; } else {return false; }                
		break;

    case "editar": 
		if ( $permiso[2] == "1" ) {return true; } else {return false; }		
		break;

    case "borrar": 
		if ( $permiso[3] == "1" ) {return true; } else {return false; }
        break;

}
}
// // saca el permiso que tiene un empleado segun su id y pagina 
//==============================================================

function permisos_pagina_u_grupo ($pagina,$u_grupo){
global $conexion; 
$sql=mysql_query("SELECT permiso FROM grupos_permisos WHERE pagina='$pagina' AND grupo='$u_grupo' ",$conexion) or die ("Error ".mysql_error());	
$reg=mysql_fetch_array($sql);

if ( $reg['permiso'] !="" ) {return $reg['permiso'];} else {return "0000";}
}

//=====================================================
function permisos_pagina_segun_u_grupo($pagina,$u_grupo) { 
global $conexion;
$sql=mysql_query("SELECT pagina FROM grupos_permisos WHERE pagina = '$pagina' AND grupo = '$u_grupo'  ",$conexion) or die ("error funcion oficina: ".mysql_error());	
$reg=mysql_fetch_array($sql); 
if ($reg['pagina']) {return true; } 
}
//=====================================================
function permisos_paginas_add($u_grupo) { 
global $conexion;
$sql=mysql_query("SELECT * FROM paginas ORDER BY pagina ",$conexion) or die ("error funcion oficina: ".mysql_error());	
	$i=1;
	while ($reg=mysql_fetch_array($sql)){
			echo "<option ";
			
		$bloqueada = permisos_pagina_segun_u_grupo($reg['pagina'],$u_grupo);
		
			
			if($bloqueada == "$reg[pagina]") { echo " disabled"; } 
			
			echo " value=\"$reg[pagina]\">"; echo strtoupper($reg['pagina']); echo "</option>";
			$i++;
} 
}
//=====================
function permisos_pagina_existe_en_rol($pagina,$rol) { 
global $conexion;
$sql=mysql_query("SELECT pagina FROM grupos_premisos WHERE pagina = '$pagina' AND grupo = '$grupo'  ",$conexion) or die ("error funcion oficina: ".mysql_error());	
$reg=mysql_fetch_array($sql); 
if ($reg['pagina']) {return true; } 
}
//=====================================================
function permisos_paginas_add_admin($rol) { 
global $conexion;
$sql=mysql_query("SELECT * FROM paginas ORDER BY pagina ",$conexion) or die ("error funcion oficina: ".mysql_error());	
	$i=1;
	while ($reg=mysql_fetch_array($sql)){
			echo "<option ";
			
		$bloqueada = permisos_pagina_existe_en_rol($reg['pagina'],$rol);
		
			
			if($bloqueada == "$reg[pagina]") { echo " disabled"; } 
			
			echo " value=\"$reg[pagina]\">"; echo strtoupper($reg['pagina']); echo "</option>";
			$i++;
} 
}
function permisos_sin_permiso($accion,$pagina,$u_id_usuario){
global $u_grupo; 
    echo "<h1>No autorizado</h1>";
    echo "<ul>"; 
    echo "<li>Ud pertenece al grupo de: <b>$u_grupo</b> </li>"; 
    echo "<li>Y quiere entrar al la pagina: <b>$pagina</b> para <b>$accion</b></li>"; 
    echo "<li>Este grupo no tiene acceso a esta pagina para realizar esta accion</li>"; 
    echo "<li>Si cree que es un error, pongase en contacto con el administrador</li>"; 
    echo "<li>Puede usar este <a href=\"index.php?p=contacto\">formulario</a> de contacto</li>"; 
    echo "</ul>"; 
    
    echo "muestra mensaje y registra la accion no permitida al usuario"; 
    //header('Location:sin_permiso.php');
    
}
?>