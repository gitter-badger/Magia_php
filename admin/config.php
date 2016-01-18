<?php 
/*############################
Facturas PHP 0.001
Creado por robinson coello 
http://mande.ec/web/facturasphp
Version: 0.001
#############################*/	
$sql=mysql_query("SELECT * FROM empresas WHERE id_empresa='1'  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql); 
$cfg_nombre_empresa	="$reg[razon_social]";
$cfg_direccion		="$reg[direccion]";
$cfg_cpostal		="$reg[cpostal]";
$cfg_ciudad		="$reg[ciudad]";
$cfg_pais		="$reg[pais]";
$cfg_ruc		="$reg[ruc]";
$cfg_banco		="$reg[banco]";
$cfg_tel		="$reg[tel]";
$cfg_email		="$reg[email]";
$cfg_web		="$reg[web]";

$cfg_idioma = "fr";
$cfg_dias="10"; // fecha de registro mas x dias = DATE D'ECHEANCE
$cfg_logo_factura="imagenes/logo.png";
$cfg_header_factura="<hr>";
$cfg_footer_factura="<hr>";	
// esto limita la cantidad de lineas al anadir en la factura
// si depasa este limite ya no habra lineas para anadir mas items
/**
 * Determina la cantidad de lineas en una factura
 */
$cfg_limite_lineas_facturas = 15;
$color1="#d3d3d3";
$color2="#ededed";
$color3="#fbf6f6";
$color4="#dadada";
$color5="#f3f3f3";
$color6="#ffffff";
$config_sitio_nombre = "Facturas";

?>