<?php 



function contenido_controlador($controlador,$nombrePlugin){
    switch ($controlador) {
        case 'index':
            $resultados = ['id_usuario','nombres','apellidos','usuario','clave','grupo'];
            $total_resultados = count($resultados);        
            $fuente  = '<?php ' ."\n";
            $fuente .= '$sql = "INSERT INTO '.$nombrePlugin.' (' ."\n";
                        $i=0;
                        while ($i < $total_resultados){
                            $fuente .= $resultados[$i]; 
                            $fuente .= ($i < $total_resultados-1)?",":"";
                            $i++;
                        }
            $fuente .= ' ) VALUES (' ."\n";
                        $i=0;
                        while ($i < $total_resultados){
                            $fuente .= ":$resultados[$i]"; 
                            $fuente .= ($i < $total_resultados-1)?",\n":"\n";
                            $i++;
                        }
            $fuente .= ' )"; '; 
            $fuente .= ' $stmt = $dbh->prepare($sql);'."\n";
            $fuente .= ' $stmt->execute(array('."\n";
                        $i=0;
                        while ($i < $total_resultados){    
                            $fuente .= ' ":'.$resultados[$i].'"=>"$'.$resultados[$i].'"';        
                            $fuente .= ($i < $total_resultados-1)?",\n":"\n";
                            $i++;
                        }
            $fuente .= '      )'."\n";
            $fuente .= ' );'."\n";
            $fuente .= ' $mensaje = "Realizado con exito";'."\n";
            $fuente .= ' ';
            return $fuente;            
            break;
            
        case 'ver':
            $fuente ="./pluging/$nombrePlugin/controlador/$controlador.php "; 
            return $fuente;
            break;
        case 'crear':
            $fuente ="./pluging/$nombrePlugin/controlador/$controlador.php  "; 
            return $fuente;
            break;
        case 'editar':
            $fuente ="./pluging/$nombrePlugin/controlador/$controlador.php  "; 
            return $fuente;
            break;
        case 'borrar':
            $fuente ="./pluging/$nombrePlugin/controlador/$controlador.php  "; 
            return $fuente;
            break;
        case 'buscar':
            $fuente ="./pluging/$nombrePlugin/controlador/$controlador.php ";
            return $fuente;
            break;
        case 'detalles':
            $fuente ="./pluging/$nombrePlugin/controlador/$controlador.php "; 
            return $fuente;
            break;

        default:
            $fuente = ""; 
            return $fuente;
            break;
    }
}

function contenido_plugin($pagina,$nombre_plugin){
    switch ($pagina) {
        case 'funciones.php':
            $fuente = ""; 
            return $fuente;
            break;
        case 'readme.txt':
            $fuente = "Plugin: $nombre_plugin "; 
            return $fuente;
            break;
        
        case 'COPYING':
            $fuente = "Aca escriba el texto de la licencia del plugin: $nombre_plugin "; 
            return $fuente;
            break;
        
        
        case '.gitignore':
            $fuente = "poner las exepciones para el github "; 
            return $fuente;
            break;
        
        
        case 'version':
            $fuente = "Version: 0.01 "; 
            return $fuente;
            break;
        
        case 'menu':
            $fuente = "<ul><li>Menu</li></ul>"; 
            return $fuente;
            break;
        
        default :
            return;
            break;
    }
}







function vceb($nombrePlugin,$mvcg){
   
    



// estos se cran por defecto enla raiz del pluging

       $c = ['funciones.php','readme.txt','COPYING','.gitignore','version','menu'] ;
       $total = count($c);
       $i=0;
        while ($i<$total) {        
         $destino = './plugins/'.$nombrePlugin.'/'.$c[$i].''; 
        // este va a ser el contedido que vamos a escribir en el documento
        $contenido = contenido_plugin($c[$i],$nombrePlugin );
        
        
        $fp = fopen($destino, 'w');
        fwrite($fp, $contenido);        
        fclose($fp);
        $i++;  
        }

switch ($mvcg) {
    case 'controlador':
        $c = ['index','ver','crear','editar','borrar','buscar','detalles'] ;
        $total = count($c);
        
        $i=0;
        while ($i<$total) {        
        $destino = './plugins/'.$nombrePlugin.'/'.$mvcg.'/'.$c[$i].'.php'; 
        // este va a ser el contedido que vamos a escribir en el documento
        $contenido = contenido_controlador($c[$i],$nombrePlugin );
        
        
        $fp = fopen($destino, 'w');
        fwrite($fp, $contenido);        
        fclose($fp);
        $i++;  
        }
        break;
        
case 'modelos':
    $c = ['index','ver','crear','editar','borrar','detalles','buscar'] ;        
    $total = count($c);
    $i=0;
        while ($i<$total) {
        
         $destino = './plugins/'.$nombrePlugin.'/'.$mvcg.'/'.$c[$i].'.php'; 
                 // este va a ser el contedido que vamos a escribir en el documento
        $contenido = contenido_controlador($c[$i],$nombrePlugin );
        $fp = fopen($destino, 'w');
        fwrite($fp, $contenido);        
        fclose($fp);
        $i++;  
        }
        break;
        
case 'controlador':
    $c = ['index','ver','crear','editar','borrar','buscar','detalles'] ;    
    $total = count($c);
    $i=0;
        while ($i<$total) {
        $c = ['index','ver','crear','editar','borrar','buscar','detalles'] ;
         $destino = './plugins/'.$nombrePlugin.'/'.$mvcg.'/'.$c[$i].'.php'; 
                 // este va a ser el contedido que vamos a escribir en el documento
        $contenido = contenido_controlador($c[$i],$nombrePlugin );
        $fp = fopen($destino, 'w');
        fwrite($fp, $contenido);        
        fclose($fp);
        $i++;  
        }
        break;
        
case 'reg':
        $i=0;
        while ($i<1) {
        $c = ['reg'] ;
         $destino = './plugins/'.$nombrePlugin.'/'.$mvcg.'/'.$c[$i].'.php'; 
                 // este va a ser el contedido que vamos a escribir en el documento
        $contenido = contenido_controlador($c[$i],$nombrePlugin );
        $fp = fopen($destino, 'w');
        fwrite($fp, $contenido);        
        fclose($fp);
        $i++;  
        }
        break;
        
case 'vista':
    //estas son las paginas  a crear
    $c = ['index','ver','crear','editar','borrar','buscar','detalles','tr','tr_anadir','tr_editar'] ;    
    $total = count($c);
    $i=0;
        while ($i<$total) {        
         $destino = './plugins/'.$nombrePlugin.'/'.$mvcg.'/'.$c[$i].'.php'; 
                 // este va a ser el contedido que vamos a escribir en el documento
        $contenido = contenido_controlador($c[$i],$nombrePlugin );
        $fp = fopen($destino, 'w');
        fwrite($fp, $contenido);        
        fclose($fp);
        $i++;  
        }
        break;
        
    default:
        
        break;
}


    
    


    
}    
    
   





































/*############################
Facturas PHP 0.001
Creado por robinson coello 
http://mande.ec/web/facturasphp
#############################*/
$version="0.042";	
/*
http://php.net/manual/en/function.sprintf.php
$num = 5;
$location = 'tree';
$format = 'There are %d monkeys in the %s';
echo sprintf($format, $num, $location);
*/
// http://www.desarrolloweb.com/articulos/formato-numeros-php.html
//$numero = 15454555200.67;
//$valor =  number_format($cantidad,2);
//$formato = '%d euro' ;
//return sprintf($formato, $valor );
//devuelve 15,201 
function moneda($cantidad="0.00") {
return number_format($cantidad,2,",","."). "";
}

/**
 * registra una frase en la tabla idiomas
 * @global type $conexion
 * @param type $f
 */
function idiomas_add_frase($f){
    global $conexion;
    if($f){
       mysql_query(" INSERT INTO idiomas (frases) VALUE ('$p')",$conexion);       
    }
}
function _t($p){
global $conexion, $u_idioma; 
$sql=mysql_query("SELECT * FROM idiomas WHERE frases = '$p'  ",$conexion);
$reg=mysql_fetch_array($sql);
        if($reg[0]){
            //mysql_query(" INSERT INTO idiomas (frases)VALUE ('$p')",$conexion);
            return $p;
        }else {
            // muestra la palabra y registra en la base de datos
            return $p; 
            idiomas_add_frase($p);
            
        }
}
function iva_add($defecto="") { 
global $conexion; 
$sql=mysql_query("SELECT * FROM iva ORDER BY iva DESC  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	

	while ($reg=mysql_fetch_array($sql)){

	
			echo "<option "	 ;
			if($defecto == $reg['iva']) {echo " selected= selected ";}
			echo " value=\"$reg[iva]\">$reg[iva] % </option>";
		}
}####################################################################################################
function nombre_vendedor($id_cliente) { 
global $conexion; 
echo "No defino";
}####################################################################################################
function nombre_empresa($id_cliente) { 
global $conexion; 
$sql=mysql_query("SELECT * FROM clientes WHERE id_cliente=$id_cliente  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){	
			
	if( $reg['razon_social'] =="" ) {
            return "$reg[cliente]";	
	} else {
		return "$reg[razon_social]";
	} 			
			
			
			
	
		}
} 
function estatus_presupuesto($id_presupuesto) { 
global $conexion; 
$sql=mysql_query("SELECT estatus FROM estatus_presupuestos WHERE cod_estatus=(SELECT estatus FROM presupuestos WHERE id_presupuesto=$id_presupuesto)  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){	
			_t($reg[0]);
	}
}###################################################################################################  
function estatus_notac($id_notac) { 
global $conexion; 
$sql=mysql_query("SELECT estatus FROM estatus_notacs WHERE cod_estatus=(SELECT estatus FROM notacs WHERE id_notac=$id_notac)  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){	
			_t($reg[0]);
		}
}###################################################################################################  
function estatus_presupuesto_add($id_presupuesto) { 
global $conexion; 
$sql=mysql_query("SELECT estatus,cod_estatus FROM estatus_presupuestos  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){	
			echo "<option value=\"$reg[cod_estatus]\">Cambiar a: $reg[estatus] </option>";
		}
}###################################################################################################  
function estatus_notac_add($id_notac) { 
global $conexion; 
$sql=mysql_query("SELECT estatus,cod_estatus FROM estatus_notacs  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){	
			echo "<option value=\"$reg[cod_estatus]\">"; echo _t($reg['estatus']); echo"</option>";
		}
}###################################################################################################  
function estatus_presupuesto_buscar() { 
global $conexion; 
$sql=mysql_query("SELECT estatus,cod_estatus FROM estatus_presupuestos  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){	
			echo "<option value=\"$reg[cod_estatus]\">"; echo _t($reg['estatus']); echo"</option>";
		}
}########################################################################
function fecha_notac($id_notac) {
global $conexion;
$sql=mysql_query("SELECT fr FROM notacs WHERE id_notac=$id_notac  
",$conexion) or die ("Problemas en el select 1: ".mysql_error());	

			$reg=mysql_fetch_array($sql);
			$fr="$reg[fr]";
			
			echo $fr;			
}#########################################################################
function fecha_presupuesto($id) {
global $conexion;
$sql=mysql_query("SELECT fr FROM presupuestos WHERE id_presupuesto=$id  
",$conexion) or die ("Problemas en el select 1: ".mysql_error());	

			$reg=mysql_fetch_array($sql);
			$fr="$reg[fr]";
			
			echo $fr;			
}#########################################################################
function ssss($id_factura) {
global $conexion;
$sql=mysql_query("SELECT SUM(total+iva) AS tvac FROM facturas WHERE id_factura=$id_factura  
",$conexion) or die ("Problemas en el select 1: ".mysql_error());	

			$reg=mysql_fetch_array($sql);
	//		$total="$reg[total]";
			$tvac="$reg[tvac]";
//			$tvac=($total)+($iva);
			
			echo $tvac;			
}#########################################################################
function mostrar_total_general_pre($p) {
global $conexion;
$sql=mysql_query("SELECT SUM(total+iva) AS tvac FROM presupuestos WHERE id_presupuesto=$p  
",$conexion) or die ("Problemas en el select 1: ".mysql_error());	

			$reg=mysql_fetch_array($sql);
			$tvac="$reg[tvac]";
			echo $tvac;			
}
function items_presupuesto($id_presupuesto) {
global $conexion;

$sql=mysql_query("SELECT * FROM presupuesto WHERE id_presupuesto=$id_presupuesto  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$i=1;
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){
			$id="lista_clientes1";
			$tr="</tr>";
			$color="#FFFFFF";
			
			}else{
			$id="lista_clientes2";
			$tr="";
			$color="#fff8e4";
			}
			
			$id_item="$reg[id_item]";
			$id_presupuesto="$reg[id_presupuesto]";
			$cantidad="$reg[cantidad]";
			$descripcion="$reg[descripcion]";
			$valor="$reg[valor]";
			$porcentaje_iva="$reg[porcentaje_iva]";
			$valor_iva="$reg[valor_iva]";
			
			$total_siva=($cantidad*$valor); 			
			$total_civa= (($total_siva*$porcentaje_iva)/100)+$total_siva;
			$i++;
			echo " <tr bgcolor=\"$color\">		
			<td  align=\"center\">$i</td>
			<td  align=\"center\">$cantidad</td>
			<td>$descripcion</td>
			<td  align=\"center\">$porcentaje_iva %</td>
			<td  align=\"right\">".moneda($valor)."</td>
			<td  align=\"right\">".moneda($total_siva)."</td>
			<td  align=\"right\">".moneda($total_civa)."</td>
			$tr"; 
			
		
	} 
	
}############################################################################
function items_notac($id_notac) {
global $conexion;

$sql=mysql_query("SELECT * FROM notac	WHERE id_notac=$id_notac  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$i=1;
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){
			$id="lista_clientes1";
			$tr="</tr>";
			$color="#FFFFFF";
			
			}else{
			$id="lista_clientes2";
			$tr="";
			$color="#fff8e4";
			}
			
			$id_item		="$reg[id_item]";
			$id_notac		="$reg[id_notac]";
			$cantidad=		"$reg[cantidad]";
			$descripcion            =	"$reg[descripcion]";
			$valor			="$reg[valor]";
			$porcentaje_iva         ="$reg[porcentaje_iva]";
			$valor_iva		="$reg[valor_iva]";
			
			$total_siva=($cantidad*$valor); 			
			$total_civa= (($total_siva*$porcentaje_iva)/100)+$total_siva;
			$i++;
			echo " <tr bgcolor=\"$color\">		
			<td  align=\"center\">$cantidad</td>
			<td>$descripcion</td>
			<td  align=\"right\">".moneda($total_civa)." </td>
			$tr"; 
			
		
	} 
	
}/////////////////////////////////////////
function prox_pre(){
global $conexion;  
$sql=mysql_query("SELECT MAX(id_presupuesto) as max FROM presupuestos	",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg= mysql_fetch_array($sql);
	echo $reg['max'] +1;
}##########################################
function prox_not(){
global $conexion;  
$sql=mysql_query("SELECT MAX(id_notac) as max FROM notacs	",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg= mysql_fetch_array($sql);
	echo $reg['max'] +1;
}////////////////////////////////////////
function total_pre_siva($p){
global $conexion;  
$sql=mysql_query("SELECT SUM(valor*cantidad) FROM presupuesto WHERE id_presupuesto='$p'	",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg= mysql_fetch_array($sql);
	return $reg[0];
}##########################################
function total_notac_siva($p){
global $conexion;  
$sql=mysql_query("SELECT SUM(valor*cantidad) FROM notac WHERE id_notac='$p'	",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg= mysql_fetch_array($sql); 
	return $reg[0];
}////////////////////////////////////////////
function total_notac_iva($p){
global $conexion;  
$sql=mysql_query("SELECT SUM(valor_iva) FROM notac WHERE id_notac='$p'	",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg= mysql_fetch_array($sql);
	return $reg[0];
}######################################
function total_pre_civa($f){ 
return total_pre_siva($f) + total_pre_iva($f) ;
/*
global $conexion;  
$sql=mysql_query("SELECT SUM( ( valor+valor_iva ) ) as tciva FROM presupuesto WHERE id_presupuesto='$p'	",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg= mysql_fetch_array($sql);
	return "$reg[tciva]";
*/
}##########################################
function total_notac_civa($f){ 
 return total_notac_siva($f) + total_notac_iva($f) ;
/* 
global $conexion;  
$sql=mysql_query("SELECT SUM( ( valor+valor_iva)  ) as tciva FROM notac WHERE id_notac='$p'	",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg= mysql_fetch_array($sql);
	return "$reg[tciva]";
	*/
}##
########################################
function comentarios_pre($p){
global $conexion;  
$sql=mysql_query("SELECT comentarios FROM presupuestos WHERE id_presupuesto=$p	",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg= mysql_fetch_array($sql);
	$comentarios="$reg[comentarios]";
	echo "$comentarios";
}##########################################
function comentarios_notac($p){
global $conexion;  
$sql=mysql_query("SELECT comentarios FROM notacs WHERE id_notac=$p	",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg= mysql_fetch_array($sql);
	$comentarios="$reg[comentarios]";
	echo "$comentarios";
}###
######################################
function actualizar_totales_pre($id){	
global $conexion;  
// iva
$sql=mysql_query("SELECT SUM(valor_iva) AS nuevo_iva, SUM(valor*cantidad) AS nuevo_total FROM presupuesto WHERE id_presupuesto='$id'	",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg= mysql_fetch_array($sql);
	$nuevo_iva="$reg[nuevo_iva]";
	$nuevo_total="$reg[nuevo_total]";
	
	$sql=mysql_query(" UPDATE presupuestos SET 
	total='$nuevo_total' , 
	iva = '$nuevo_iva'   
	WHERE id_presupuesto = '$id' ",$conexion)	or die ("Problemas en el select 1: ".mysql_error()); 	
	

}########################################## 
function datos_empresa_pie() {
global $conexion;

$sql=mysql_query("SELECT * FROM empresas WHERE id_empresa=1  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$i=1;
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){
			$id="lista_clientes1";
			$tr="</tr>";
			$color="#FFFFFF";
			
			}else{
			$id="lista_clientes2";
			$tr="";
			$color="#fff8e4";
			}

			
			$empresa="$reg[nombre]";
			$ruc="$reg[ruc]";
			$direccion="$reg[ruc]";
			$nombre="$reg[nombre]";
			$ruc="$reg[ruc]";
			$direccion="$reg[direccion]";
			$cpostal="$reg[cpostal]";
			$ciudad="$reg[ciudad]";
			$pais="$reg[pais]";
			$tel="$reg[tel]";
			$fax="$reg[fax]";
			$email="$reg[email]";
			$web="$reg[web]";
			$banco="$reg[banco]";
			
			$i++;
                        
                        
			echo  "
			$empresa<br>
			$direccion $cpostal $ciudad $pais<br/>
			";_t("Tel"); echo ": $tel ";_t("Fax"); echo ": $fax<br/>
			";_t("Email"); echo ": $email ";_t("Web"); echo ": $web<br/>
			";_t("Ruc"); echo ": $ruc - ";_t("Banco"); echo ": $banco
			"; 
			
		
	} 
	
}########################################################
##########################################

function enviar_email($id_cliente,$asunto,$mensaje){
global $conexion; 
/*
echo "<hr>";
echo "id cliente: $id_cliente<br> Asunto: $asunto <br>mensaje: $mensaje";	
echo "<hr>";
*/
	// buscamos el email del cliente segun el id

$sql=mysql_query("SELECT email FROM clientes WHERE id_cliente=$id_cliente",$conexion) 
or die ("Problemas en el select function enviar_email: ".mysql_error());		
	$reg= mysql_fetch_array($sql);	
	$email="$reg[email]";
	// si exite el email enviamos enviamos
	if($email){
//	  mail("$para","$asunto","$mensaje");

$mail = 'info@mande.ec'; // D�claration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
    $passage_ligne = "\r\n";
}
else
{
    $passage_ligne = "\n";
} 
//$mensajefin= preg_replace('\n','<br />', $mensaje);

//=====D�claration des messages au format texte et au format HTML.
$message_txt = "$mensaje.";
$message_html = "<html><head></head><body>$mensaje</body></html>";
//==========
  
//=====Cr�ation de la boundary
$boundary = "-----=".md5(rand());
//==========
  
//=====D�finition du sujet.
//$sujet = "Hey mon ami !";
//$sujet = "$asunto";
//=========
  
//=====Cr�ation du header de l'e-mail.
$header = "From: \"Sube y Baja SPRL\"<byronbasabanda@hotmail.com>".$passage_ligne;
$header.= "Reply-to: \"Sube y Baja SPRL\" <byronbasabanda@hotmail.com>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
//=====Cr�ation du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($email,$asunto,$message,$header); 
//==========	
} 
	else{
	echo "cliente no tiene email";
	}	
}######################################################################
/*
function form_buscar_presupuesto(){	
global $I_escoja_cliente, $I_crear_presupuesto,$color4;
?>
  	<table summary="" border="0" align="center">
	<tr>
	
	<td colspan="3" bgcolor="<?php echo "$color4";?>">Buscar presupuestos:</td>
	</tr>
	<form action="presupuesto_buscar.php" method="post">
	<input type="hidden" name="accion" value="id_presupuesto"> 	
	<tr>
 		<td bgcolor="#99FFFF">&nbsp;N� de presupuesto</td>
 		<td>&nbsp;<input type="text" name="id_presupuesto" size="10" maxlength="256"></td>
		<td>&nbsp;<input type="submit" value="Buscar">
            </td>
 	</tr> 
</form>	


<form action="presupuesto_buscar.php" method="post">
<input type="hidden" name="accion" value="id_cliente"> 	
	<tr>
 		<td bgcolor="#99FFFF">&nbsp;presupuestos por cliente</td>
 		<td>&nbsp;
					<select name="id_cliente">
				 	<option value="0"><?php echo "$I_escoja_cliente"; ?></option>
					<?php clientes_add(); ?>
				 </select> 
  
		</td>
		<td>&nbsp;<input type="submit" value="Buscar">
            </td>
 	</tr> 
</form>		



<form action="presupuesto_buscar.php" method="post">
<input type="hidden" name="accion" value="total"> 	
	<tr>
 		<td bgcolor="#99FFFF">&nbsp;Por Cantidad</td>
 		<td>&nbsp;<input type="text" name="total" size="10" maxlength="256"> HTVA</td>
		<td>&nbsp;<input type="submit" value="Buscar">
            </td>
 	</tr> 
</form>		
		 
<form action="presupuesto_buscar.php" method="post">
<input type="hidden" name="accion" value="buscar"> 	
	<tr>
 		<td bgcolor="#99FFFF">&nbsp;Por Comentarios</td>
 		<td>&nbsp;<input type="text" name="id_presupuesto" size="40" maxlength="256"></td>
		<td>&nbsp;<input type="submit" value="Buscar">
            </td>
 	</tr> 
</form>	
		
<form action="presupuesto_buscar.php" method="post">
<input type="hidden" name="accion" value="estatus"> 	
	<tr>
 		<td bgcolor="#99FFFF">&nbsp;presupuestos segun estatus</td>
 		<td>&nbsp;
		<select name="estatus">
			<?php estatus_presupuesto_buscar(); ?>
		</select> 
  
		</td>
		<td>&nbsp;<input type="submit" value="Buscar">
            </td>
 	</tr> 
</form>		



	<!-- <tr>
		<td bgcolor="#CCFF33" colspan="3">Crear una presupuesto</td>
	</tr>


	  <tr>
		<td  colspan="3">&nbsp;Crear una presupuesto, escoje el cliente porfavor
				<form action="presupuesto_nueva.php" method="post">
					<select name="id_cliente">
				 	<option value="0"><?php echo "$I_escoja_cliente"; ?></option>
					<?php clientes_add(); ?>
				 </select> 
				 <input type="text" name="n_byron" size="5" maxlength="9">
     
				 
				<input type="hidden" name="accion" value="nada">
				<input type="hidden" name="id_presupuesto" value="0">
				 
				<input type="submit" value="<?php echo "$I_crear_presupuesto"; ?>">
				</form>	

</td>
	</tr> -->
</table>  	  




 
<?php
}

*/

########################################################
/*
function form_buscar_cliente() {
?>
<table summary="" border="0" width="50%" align="center">
	
<tr>
	<td colspan="3" bgcolor="#0fa1e0">Buscar Clientes</td>
</tr>
	
	
<form action="buscar.php" method="post">	
	<tr>
		<td bgcolor="#99FFFF">Numero de Cliente:</td>
		<td>
			
			<input type="text" name="busqueda" size="5" maxlength="256" value=""> 
			<input type="hidden" name="que_buscar" value="id_cliente">
		</td> 
		
		<td align="right"><input type="submit" value="Buscar"></td>
	</tr> 
</form>	
	
<form action="buscar.php" method="post">	
	<tr>		
		<td bgcolor="#99FFFF">Empresa:</td>
		<td>
			
			<input type="text" name="busqueda" size="15" maxlength="256" value="">
		    <input type="hidden" name="que_buscar" value="empresa">	
		</td>	
			<td align="right"><input type="submit" value="Buscar"></td>
	</tr>	
</form>	   











<form action="buscar.php" method="post">
<tr>
	<td bgcolor="#99FFFF">Cliente	</td>
	<td>
		<input type="text" name="busqueda" size="15" maxlength="256" value="">
		<input type="hidden" name="que_buscar" value="cliente">
	</td>
	<td align="right">
		<input type="submit" value="Buscar">
	</td>
</tr>
</form>


<form action="buscar.php" method="post">
<tr>
  <td bgcolor="#99FFFF">C�digo Postal</td>
	<td>
		<input type="text" name="busqueda" size="5" maxlength="256" value=""> 
		<input type="hidden" name="que_buscar" value="cpostal">
	</td>
	<td align="right"><input type="submit" value="Buscar"></td>
</tr>
</form>
	
</table>	 

<?php
} 	  
*/
########################################################
##############################################################

/*function form_pre_nuevo(){ 
global $I_escoja_cliente, $I_crear_presupuesto; 
?>	

 
<table bgcolor="#FDFFE0" align="center" summary="" border="0" width="95%">
<tr><td><b><div style="text-align: center">Nuevo presupuesto</div></b></td></tr>
	<tr>
		
		<td  align="center">&nbsp;
				<form action="presupuesto_nueva.php" method="post">
				
					<select name="id_cliente">
				 	<option value="0"><?php echo "$I_escoja_cliente"; ?></option>
					<?php clientes_add(); ?>
				 </select>
				 

				<b><font color="#FF6600">N� </font></b><input type="text" name="n_byron" size="5" maxlength="9">
  
				 
				<input type="hidden" name="accion" value="nada">
				<input type="hidden" name="id_presupuesto" value="0"> 
				

				<input type="submit" value="<?php echo "$I_crear_presupuesto"; ?>">	 <br/>
				<b><font color="#FF6600">N�:</font></b> deje vacio para que el sistema de automaticamente un n�mero al presupuesto
				</form>	

</td>
	</tr>
</table> 




<?php
}







*/
##################################	
/*
 function cliente_detalles($id_cliente){
 global $conexion;
echo "	<table border=\"0\" width=\"100%\" align=\"center\">	";
$sql=mysql_query("SELECT * FROM clientes WHERE id_cliente=$id_cliente  ",$conexion) 
or die ("Problemas en el select 1: ".mysql_error());	
	$i=1;
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){
			$id="lista_clientes1";
			$tr="</div>";
			$color="#FFFFFF";
			
			}else{
			$id="lista_clientes2";
			$tr="";	  
			$color="";
			}
			
		$ruc="$reg[ruc]";
		$estatus="$reg[estatus]";
		
			$i++;
			
				echo " <tr bgcolor=\"\">
				
				<td width=\"30%\" class=\"items\" width=\"30%\">N� de Cliente</td>
				<td><b>$reg[id_cliente]</b></td>
				</tr>
				<tr>
					<td class=\"items\">Ruc:</td>
					<td>$reg[ruc]
					
					</td> 
				</tr>	

				<tr>
					<td class=\"items\">Empresa:</td>
					<td>$reg[empresa]</td> 
				</tr>	

				
				<tr>
					<td class=\"items\">Nombre Cliente</td>
					<td>$reg[cliente]</td> 
				</tr>
				
				<tr>
					<td class=\"items\">Direcci�n</td>
					<td>$reg[direccion]</td> 
				</tr>
				
				<tr>
					<td class=\"items\">C. Postal</td>
					<td>$reg[cpostal]</td> 
				</tr>
				
				
				<tr>
					<td class=\"items\">Ciudad</td>
					<td>$reg[ciudad]</td> 
				</tr>
				
				<tr>
					<td class=\"items\">Pa�s</td>
					<td>$reg[pais]</td> 
				</tr>
				
				<tr>
					<td class=\"items\">Tel�fono</td>
					<td>$reg[tel]</td> 
				</tr>
				
				<tr>
					<td class=\"items\">Fax</td>
					<td>$reg[fax]</td> 
				</tr>
				
				<tr>
					<td class=\"items\">E-mail</td>
					<td>$reg[email]</td> 
				</tr>
				
				<tr>
					<td class=\"items\">Tipo</td>
					<td>$reg[tipo]</td> 
				</tr>
				
				
				<tr>
					<td class=\"items\">Estatus</td>
					<td>";
					 if($estatus==1){echo "activo";}else{echo "bloqueado";}
     
					echo "</td> 
				</tr>
				
				
				
				
				<tr>
					<td class=\"items\"></td>
					<td>";	?>
         			<form action="cliente_editar.php" method="post"> 
   <input type="hidden" name="id_cliente" value="<?php echo "$id_cliente"; ?>">
   <input type="hidden" name="accion" value="nada">
   <input type="submit" value="Editar">
   </form>
   
   </td> 
					
	</tr>		
			<?php 
			 if($estatus==1){echo "
			 <tr>
		<td class=\"items\"></td>
		<td>
   <form action=\"factura_nueva.php\" method=\"post\"> 
   <input type=\"hidden\" name=\"accion\" value=\"nada\">
   <input type=\"hidden\" name=\"id_factura\" value=\"0\">
   <input type=\"hidden\" name=\"id_cliente\" value=\"$id_cliente\">	
   <input type=\"hidden\" name=\"n_byron\" value=\"0\">   
   <input type=\"submit\" value=\"Facturar\">
   </form>
   </td>
 </tr>";}
			
			?>
			
			
			
			
			
			
			
			
			
			
			
			

   

				
				<?php echo "</td> 
				
				
				
				
				
				
				
				$tr"; 
				
?>   
<?php 
} 
?>

	
	</table>
	  
 
 
 <?php
 }	  
 	   
 */###################################################################
/*
 function vendedor_detalles($id_vendedor){
 global $conexion;
 ?>
 
	 
	<table border="0" width="100%" align="center">	

<?php  
$sql=mysql_query("SELECT * FROM vendedores WHERE id_vendedor=$id_vendedor  ",$conexion) 
or die ("Problemas en el select 1: ".mysql_error());	
	$i=1;
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){
			$id="lista_vendedores1";
			$tr="</div>";
			$color="#FFFFFF";
			
			}else{
			$id="lista_vendedores2";
			$tr="";	  
			$color="";
			}
			
		$ruc="$reg[ruc]";
		$estatus="$reg[estatus]";
		
			$i++;
			
				echo " <tr bgcolor=\"\">
				
				<td width=\"30%\">N� de vendedor</td>
				<td><b>$reg[id_vendedor]</b></td>
				</tr>
				<tr>
					<td>Ruc:</td>
					<td>$reg[ruc]
					
					</td> 
				</tr>	

				<tr>
					<td>Empresa:</td>
					<td>$reg[empresa]</td> 
				</tr>	

				
				<tr>
					<td>Nombre vendedor</td>
					<td>$reg[vendedor]</td> 
				</tr>
				
				<tr>
					<td>Direcci�n</td>
					<td>$reg[direccion]</td> 
				</tr>
				
				<tr>
					<td>C. Postal</td>
					<td>$reg[cpostal]</td> 
				</tr>
				
				
				<tr>
					<td>Ciudad</td>
					<td>$reg[ciudad]</td> 
				</tr>
				
				<tr>
					<td>Pa�s</td>
					<td>$reg[pais]</td> 
				</tr>
				
				<tr>
					<td>Tel�fono</td>
					<td>$reg[tel]</td> 
				</tr>
				
				<tr>
					<td>Fax</td>
					<td>$reg[fax]</td> 
				</tr>
				
				<tr>
					<td>E-mail</td>
					<td>$reg[email]</td> 
				</tr>
				
				<tr>
					<td>Tipo</td>
					<td>$reg[tipo]</td> 
				</tr>
				
				
				<tr>
					<td>Estatus</td>
					<td>";
					 if($estatus==1){echo "activo";}else{echo "bloqueado";}
     
					echo "</td> 
				</tr>
				
				
				
				
				<tr>
					<td></td>
					<td>";	?>
   <form action="vendedor_editar.php" method="post"> 
   <input type="hidden" name="id_vendedor" value="<?php echo "$id_vendedor"; ?>">
   <input type="hidden" name="accion" value="nada">
   <input type="submit" value="Editar">
   </form>
   

				
				<?php echo "</td> 
				
				
				
				$tr"; 
				
?>   
<?php 
} 
?>

	
	</table>
	  
 
 
 <?php
 }

*/###################################################################
function paises_add($defecto="Belgium") {
global $conexion; 
$sql=mysql_query("SELECT * FROM paises   ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$i=1;
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){			
			
			}else{
			
			}
		echo "<option ";
		if($reg['name']==$defecto) {echo "selected=selected";}		
		 echo "value=\"$reg[name]\">$reg[name]</option>";	
	   }
}###################################################################

function cuentas_tipo_add ($tipo, $defecto="") { 
global $conexion; 
$sql=mysql_query("SELECT * FROM cuentas WHERE tipo=$tipo   ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$i=1;
while ($reg=mysql_fetch_array($sql)){
		echo "<option ";
		if($reg['cuenta']==$defecto) {echo " selected=selected ";}		
		 echo "value=\"$reg[cuenta]\">	$reg[cuenta] -  $reg[descripcion]</option>";	
	}
}####################################################################
function cuentas_tipo ($x) { 
global $conexion; 
$sql=mysql_query("SELECT * FROM cuentas  WHERE cuenta = $x ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	

$reg=mysql_fetch_array($sql);
echo "$reg[descripcion]";

}####################################################################
function ice_add ($x="") { 
global $conexion; 
$sql=mysql_query("SELECT * FROM ice ORDER BY codigo_ice    ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$i=1;
while ($reg=mysql_fetch_array($sql)){
		echo "<option ";
		if($reg['codigo_ice']==$x) {echo " selected=selected ";}		
		 echo "value=\"$reg[codigo_ice]\">	$reg[codigo_ice] -  $reg[descripcion]</option>";	
	}
}####################################################################
function ice ($x) { 
global $conexion; 
$sql=mysql_query("SELECT * FROM ice  WHERE codigo_ice = $x ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	

$reg=mysql_fetch_array($sql);
echo "$reg[descripcion]";

}####################################################################
function tipo_producto_add ($t="") { 
echo "
			<option value=\"Bien\" ";		if($t =="bien") 		{echo " selected=selected ";} echo ">Bien</option>
			<option value=\"Servicio\" "; 	if($t =="servicio") 	{echo " selected=selected ";} echo ">Servicio</option>
		";
}########################################################################
function contable_nombres($id_contable) { 
global $conexion; 
$sql=mysql_query("SELECT nombres FROM contables  WHERE id_contable = '$id_contable' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);

	return  "$reg[nombres]";

}########################################################################
function contable_email($id_contable) { 
global $conexion; 
$sql=mysql_query("SELECT email FROM contables  WHERE id_contable = '$id_contable' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);

	return  "$reg[email]";

}########################################################################
function contable_id() { 
global $conexion; 
$sql=mysql_query("SELECT id_contable FROM contables  WHERE estatus = 1 ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);

	return  "$reg[id_contable]";

}########################################################################
function pdf_nombre($id_informe) { 
global $conexion; 
$sql=mysql_query("SELECT doc FROM informes  WHERE id_informe = '$id_informe' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);

	return  "$reg[doc]";

}##########################################################################
function logs_documentos($usuario,$doc,$accion,$campo,$valor_anterior,$valor_actual ) {
global $conexion; 

$sql=mysql_query("INSERT INTO  logs_documentos (usuario,doc,accion,campo,valor_anterior,valor_actual ) VALUES ('$usuario','$doc','$accion','$campo','$valor_anterior','$valor_actual') ",$conexion) or die ("Problemas en el select: ".mysql_error());	

}####################################################################
function index_balanza_total($t) { 
global $conexion; 
$sql=mysql_query("SELECT SUM(total) as total FROM balanza WHERE tipo = '$t'",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);
//$total = mysql_num_rows($sql);  
	$total = $reg['total'];
return $total;
}####################################################################
function index_total_cli($estatus) { 
global $conexion; 
$sql=mysql_query("SELECT * FROM clientes  WHERE estatus = $estatus ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);
$total = mysql_num_rows($sql);
return $total;
}####################################################################
function index_total_fact($estatus) { 
global $conexion; 
$sql=mysql_query("SELECT SUM((total+iva)-anticipo) as total FROM facturas  WHERE estatus != '-1' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);
//$total = mysql_num_rows($sql);  
	$total = $reg['total'];
return $total;
}####################################################################
function index_total_fact_cobrado($estatus) { 
global $conexion; 
$sql=mysql_query("SELECT SUM(anticipo) as total FROM facturas  WHERE estatus != '-1' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);
//$total = mysql_num_rows($sql);  
	$total = $reg['total'];
return $total;
}####################################################################
function index_total_iva_fac($estatus) { 
global $conexion; 
$sql=mysql_query("SELECT SUM(iva) as iva FROM facturas  WHERE estatus = $estatus ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);
//$total = mysql_num_rows($sql);  
	$total = $reg['iva'];
return $total;
}####################################################################
function index_total_siva_pre($estatus) { 
global $conexion; 
$sql=mysql_query("SELECT SUM(total) as total FROM presupuestos  WHERE estatus = $estatus ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);
//$total = mysql_num_rows($sql);  
	$total = $reg['total'];
return $total;
}####################################################################
function index_total_iva_pre($estatus) { 
global $conexion; 
$sql=mysql_query("SELECT SUM(iva) as iva FROM presupuestos  WHERE estatus = $estatus ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);
//$total = mysql_num_rows($sql);  
	$total = $reg['iva'];
return $total;
}####################################################################
function index_total_siva_not() { 
global $conexion; 
$sql=mysql_query("SELECT SUM(total) as total FROM notacs  WHERE estatus != '-1' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);
//$total = mysql_num_rows($sql);  
	$total = $reg['total'];
return $total;
}####################################################################
function index_total_iva_not() { 
global $conexion; 
$sql=mysql_query("SELECT SUM(iva) as iva FROM notacs  WHERE estatus != '-1' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);
//$total = mysql_num_rows($sql);  
	$total = $reg['iva'];
return $total;
}###################################################################
function puede_cambiar_estatus_pre($id) {
global $conexion; 
$sql=mysql_query("SELECT estatus FROM presupuestos  WHERE id_presupuesto = '$id' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	
	$reg=mysql_fetch_array($sql);
	
	if( $reg['estatus'] !=1 ) {
	return TRUE ;
	}			
	else {
	return FALSE ;
	}
	


}########################################################################
function cita($f,$hora) {	
global $conexion; 
$sql=mysql_query("SELECT * FROM agenda  WHERE f= '$f' AND hora ='$hora' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	
	$reg=mysql_fetch_array($sql);
	
	return "$reg[id_cliente]"; 
	
	
	

}#######################################################################
// function bancos_add() { 
function bancos_saldo($id_banco) { 
global $conexion; 

$sql=mysql_query("SELECT sum(total) as saldo FROM balanza WHERE id_banco = '$id_banco' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);
	return $reg['saldo'];
}#######################################################################	 
// factura_der.php 	
function bancos_add() { 
global $conexion; 

$sql=mysql_query("SELECT id_banco, banco,cuenta FROM bancos",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){
			echo "<option value=\"$reg[id_banco]\">$reg[banco] : ". moneda( bancos_saldo($reg['id_banco']) ) ." </option>";
		}
}######################################################################
function banco_nombre($id) { 
global $conexion; 

$sql=mysql_query("SELECT banco,cuenta FROM bancos WHERE id_banco = '$id' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){
		
		return "$reg[banco] ";	
			
		}
}#######################################################################	
/*
 balanza_ok.php
*/


function balanza_pagos_segun_factura($id) {
global $conexion, $color1, $color2, $color3; 
$sql=mysql_query("SELECT total,f FROM balanza WHERE id_factura = '$id'   ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
        echo "<tr bgcolor=\"$color2\"><td>#</td>"
                . "<td>"; _t("Fecha"); echo "</td>"
                . "<td align=\"right\">"; _t("Valor"); echo "</td>"
                
                . "</tr>"; 
	$i=1; 	
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){
			$color="$color2";
			$tr="</tr>";				
		} else{
			$color="$color3";
			$tr="</tr>";
		}		
		
		$tciva = $reg['total'] ;
		
		echo "	<tr bgcolor=\"$color\">
				<td align=\"center\">$i</td>
				<td >$reg[f]</td>
				<td align=\"right\">".  moneda(  $tciva ) ."</td>
				$tr";	
				$i++;
						
		  
	}	
	
	$sql2=mysql_query("SELECT SUM(total) AS total FROM balanza WHERE id_factura = '$id'   ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg=mysql_fetch_array($sql2);
	// cambio de estatus si lo cobrado es igual o superior al total de la factura 

	
	echo "<tr bgcolor=\"$color1\">
			<td></td>
			<td align=\"right\"><b>"; _t("Total Cobrado"); echo "</b></td>
			<td align=\"right\"><b>".moneda($reg['total'])."</b></td>
		</tr>";	
	
	
}
/*
##############################################	
// balanza_ok.php
function balanza_sig_cod_anu() {
global $conexion; 

$sql=mysql_query("SELECT MAX(cod_anu) as max FROM balanza ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg=mysql_fetch_array($sql);
		
		return $reg['max']+1;
}	

###############################################
// balanza_ok.php
function factura_id_segun_transaccion($id_transaccion) {  
global $conexion; 
	$sql2=mysql_query("SELECT id_factura FROM balanza WHERE id_transaccion = '$id_transaccion'   ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg=mysql_fetch_array($sql2);	
	return $reg['id_factura'];

}	�
*/
##############################################
// factura.php xx
function bal_total_cobrado_por_fac($id_factura) { // esta funcion esta doble 
global $conexion;  
$sql=mysql_query("SELECT SUM(total) as total FROM balanza WHERE id_factura = '$id_factura'   ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg=mysql_fetch_array($sql); 
	return $reg['total'];
}############################################################################
// factura_der.php
/**
 * 
 * @global type $conexion
 * @global type $color1
 * @global type $color2
 * @global type $color3
 * @param type $id
 */
function empleados_segun_factura($id) {
global $conexion, $color1, $color2, $color3; 
$sql=mysql_query("SELECT id_empleado FROM fac_emp WHERE id_factura = '$id'   ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$i=1; 	
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){
			$color="$color2";
			$tr="</tr>";				
		} else{
			$color="$color3";
			$tr="</tr>";
		}		
		echo "	<tr bgcolor=\"$color\">
				
				<td><a href=\"empleado.php?id_empleado=$reg[id_empleado]\">"; empleado_nombres($reg['id_empleado']); echo "</a></td>
				<td><a href=\"factura_ok.php?accion=borrar_empleado&id_factura=$id&id_empleado=$reg[id_empleado]\">"; echo _t('Borrar'); echo "</a></td>
				$tr";	
				$i++;		  
	}	
}############################################################################
// factura_der.php
/**
 * 
 * @global type $conexion
 * @global type $color1
 * @global type $color2
 * @global type $color3
 * @param type $id
 */
function vehiculos_segun_factura($id) {
global $conexion, $color1, $color2, $color3; 
$sql=mysql_query("SELECT id_vehiculo FROM fac_veh WHERE id_factura = '$id'   ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$i=1; 	
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){
			$color="$color2";
			$tr="</tr>";				
		} else{
			$color="$color3";
			$tr="</tr>";
		}		
		echo "	<tr bgcolor=\"$color\">
				
				<td><a href=\"vehiculo.php?id_vehiculo=$reg[id_vehiculo]\">"; vehiculo_nombre($reg['id_vehiculo']); echo "</a></td>
				<td><a href=\"factura_ok.php?accion=borrar_vehiculo&id_factura=$id&id_vehiculo=$reg[id_vehiculo]\">"; echo _t('Borrar'); echo "</a></td>
				$tr";	
				$i++;		  
	}	
}#####################################################################
// verifica si el vehiculo esta ya en la factura 
// function empleados_add() {
function empleado_ya_en_factura($id_factura,$id_empleado) {	
global $conexion; 
$sql=mysql_query("SELECT * FROM fac_emp WHERE id_factura = '$id_factura' AND id_empleado='$id_empleado'  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$total = mysql_num_rows($sql);
if ($total > 0 ) {return TRUE; } else { return FALSE; }
}#######################################################################	 
// factura_der.php 	
function empleados_add($id_factura) { 
global $conexion; 

$sql=mysql_query("SELECT id_empleado, nombres, apellidos, tel FROM empleados WHERE estatus='1'",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){
			echo "<option ";
			if( empleado_ya_en_factura($id_factura,$reg['id_empleado']) == TRUE ) {echo " disabled ";}			
			echo "value=\"$reg[id_empleado]\"> $reg[nombres] $reg[apellidos] </option>";
		}
}#######################################################################	 
// factura_der.php 	
function empleado_nombres($id) { 
global $conexion; 

$sql=mysql_query("SELECT nombres,apellidos FROM empleados WHERE id_empleado='$id'",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){
			echo "$reg[nombres] $reg[apellidos]" ;
		}
}#######################################################################	 
// factura_der.php 	
function vehiculo_nombre($id) { 
global $conexion; 

$sql=mysql_query("SELECT vehiculo, placa FROM vehiculos WHERE id_vehiculo='$id'",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){
			echo "$reg[placa] : $reg[vehiculo] " ;
		}
}#####################################################################
// verifica si el vehiculo esta ya en la factura			
// function vehiculos_add($id_factura) { 
function vehiculo_ya_en_factura($id_factura,$id_vehiculo) {	
global $conexion; 
$sql=mysql_query("SELECT * FROM fac_veh WHERE id_factura = '$id_factura' AND id_vehiculo='$id_vehiculo'  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$total = mysql_num_rows($sql);
if ($total > 0 ) {return TRUE; } else { return FALSE; }
}#######################################################################	 
// factura_der.php 	
function vehiculos_add($id_factura) { 
global $conexion; 
$sql=mysql_query("SELECT id_vehiculo, placa, vehiculo FROM vehiculos WHERE estatus='1' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){
			echo "<option ";
			if( vehiculo_ya_en_factura($id_factura,$reg['id_vehiculo']) == TRUE ) {echo " disabled ";}
			echo " value=\"$reg[id_vehiculo]\"> $reg[placa] : $reg[vehiculo]  </option>";
		}
}
function dias_sin_accidentes() {
global $conexion;
$sql=mysql_query("SELECT MAX(f) as fecha FROM accidentes ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
		$reg=mysql_fetch_array($sql);		
		$fecha = "$reg[fecha]";
		$hoy	=date('Y-m-d');		
           if (!is_integer($fecha)) $fecha = strtotime($fecha);
           if (!is_integer($hoy)) $hoy = strtotime($hoy);  
           return floor(abs($fecha - $hoy) / 60 / 60 / 24);
}###############################################################
function gasto_pagado($fecha,$id_gasto) {
global $conexion, $color1, $color2, $color3, $idioma;  

//$sql=mysql_query("SELECT * FROM gas_fec WHERE pagado='1' AND ( MONTH(fecha) <= '$m' AND MONTH(fecha) >='$m') ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$sql=mysql_query("SELECT * gas_fec  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$i=1; 
	$clase="";
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){
			$color="$color2" ;	
			$tr="</tr>";
			
			}else{
			$color="$color3";
			$tr="";
			} 	
			
			$id_gasto 	= "$reg[id_gasto]";
			// mostramos los itams
			gastos_items($id_gasto);
			 
	}	   
}###########################################################################
###############################################################
function gastos_items($id_gasto) {
global $conexion, $color1, $color2, $color3, $idioma;  
$sql=mysql_query("SELECT * FROM gastos WHERE id_gasto = '$id_gasto'  ",$conexion) or die ("Problemas gasto items 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);

			 echo "
			 <td>$reg[descripcion]</td>
			  ";
	  
}#########################################################################
/*
###############################################################
function gastos_items_add($mes) {
global $conexion, $color1, $color2, $color3, $idioma; 

$sql=mysql_query("SELECT * FROM gastos WHERE  (MONTH(fi) <= '$mes' AND MONTH(ff) >='$mes' )  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$i=1; 
	$clase="";
	while ($reg=mysql_fetch_array($sql)){
		if(($i%2)==0){
			$color="$color2" ;	
			$tr="</tr>";
			
			}else{
			$color="$color3";
			$tr="";
			}  
			
			
			
?>
	 
   <script>
		$(function() {
			$( "#fecha_<?php echo "$i";?>" ).datepicker({
			altField: "#alternate",
			altFormat: "DD, d MM, yy",
			maxDate: "0D" 			
			});
		});
</script>
<?php			
			
			
			
			
			
			echo "
			<form action=\"balanza_ok.php\" method=\"post\">
			<tr bgcolor=\"$color\">
			<input type=\"hidden\" name=\"accion\" value=\"anadir\">	
			<input type=\"hidden\" name=\"tipo\" value=\"-1\">
			<input type=\"hidden\" name=\"id_cliente\" value=\"$reg[id_cliente]\">	
			<input type=\"hidden\" name=\"id_factura\" value=\"$reg[id_factura]\">				
			
			<td><input type=\"text\" name=\"descripcion\" size=\"15\" maxlength=\"50\" value=\"$reg[descripcion]\"></td>
			
			<td><select name=\"id_banco\" size=\"1\">";bancos_add(); echo "</select></td>
			
			<td><input type=\"text\" name=\"fecha\" id=\"fecha_$i\" size=\"10\" maxlength=\"10\" value=\""; echo date('Y-m-d'); echo "\"></td>			
			
			<td><input type=\"text\" name=\"sub_total\" size=\"8\" maxlength=\"10\" value=\"$reg[sub_total]\"></td>		
			
			<td><input type=\"text\" name=\"iva\" size=\"8\" maxlength=\"10\" value=\"$reg[iva]\"></td>	
			
			<td><input type=\"text\" name=\"ref\" size=\"8\" maxlength=\"10\" value=\"$reg[ref]\"></td>
						
			<td><input type=\"text\" name=\"ce\" size=\"23\" maxlength=\"50\" value=\"$reg[ce]\"></td>	
			
			<td><input type=\"submit\" value=\"Pagar\">	 
			</td>
			$tr
	   </form>	";
	   							
			$clase="";
			$i++;		
        		
}
}				
*/##########################################################################
###
#############################################	
// balanza_ok.php
function balanza_sig_cod_anu() {
global $conexion; 

$sql=mysql_query("SELECT MAX(cod_anu) as max FROM balanza ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	$reg=mysql_fetch_array($sql);
		
		return $reg['max']+1;
}####################################################
########################################################################

/**
 * Muestra las lineas de la factura
 * @global type $conexion
 * @param type $id_factura
 */

function presupuestos_total_items($id_presupuesto) {
global $conexion; 
$sql=mysql_query("SELECT count(*) as total FROM presupuestos WHERE id_presupuesto='$id_presupuesto' ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
$reg=mysql_fetch_array($sql);

return $reg[0];
}


/**
 * 
 * @global type $conexion
 * @param type $id_transaccion
 * @param type $descripcion
 * @return boolean
 */
function balanza_anular_transaccion($id_transaccion,$descripcion="") {
// balanza_ok.php
global $conexion;

// siguiente codigo de anulacion 
$balanza_sig_cod_anu	=	balanza_sig_cod_anu();
// copiamos la transaccion pero ponemos valores contrarios 	
		$sql=mysql_query("INSERT INTO balanza (
		SELECT 		
		NULL,		
		-(tipo), 
		ref,	
		'$descripcion',		
		ce,		
		-(sub_total), 			
		-(iva), 			
		-(total),		
		f, 			
		NULL, 			
		id_cliente,		
		id_factura, 			
		id_banco, 		
		1 ,		
		'$balanza_sig_cod_anu'				
		
		FROM balanza WHERE id_transaccion='$id_transaccion'  
		) ",$conexion) 	or die ("Problemas en el select 1: ".mysql_error());						   

		// ponemos anulada a la transaccion de origen y le asignamos el codigo de anulacion   
		$sql=mysql_query("UPDATE balanza SET 
		anulada = '1', 
		cod_anu='$balanza_sig_cod_anu' 
		
		WHERE id_transaccion='$id_transaccion' ",$conexion) 	or die ("Problemas en el select 1: ".mysql_error());						   

	  return TRUE ; 

}#################################################################################################################
// factura_ok.php
/**
 * 
 * @global type $conexion
 * @param type $id_factura
 * @param type $anticipo
 */
function	notac_de_factura_anulada($id_factura,$anticipo) {
global $conexion;
	$hoy 		= date('Y-m-j');  
	$id_cliente = cliente_id_segun_factura($id_factura); 
	
	$sql=mysql_query(" INSERT INTO notacs (id_notac,id_factura,id_cliente,fr,total,iva,estatus) VALUE (NULL,'$id_factura','$id_cliente','$hoy','$anticipo','0','1')",$conexion)	or die ("Error, es probable que el numero de notac ya exista !!!!!<br/> <br/> <br/> : ".mysql_error()); 
	
	// actualizo el item de a nota de credito
	$notac_reciente	= mysql_insert_id();
	
	// registro en la Base 
	$sql=mysql_query(" INSERT INTO notac (id_notac,cantidad,descripcion,valor,porcentaje_iva,valor_iva) VALUE (	'$notac_reciente','1','Factura: $id_factura','$anticipo','0','0')",$conexion)	or die ("Problemas en el select 1: ".mysql_error());
	
	// actualizo el id_notac en facturas	
	$sql=mysql_query("UPDATE facturas  SET id_notac = '$notac_reciente' , anticipo = '0' WHERE id_factura = '$id_factura' ",$conexion)	or die ("Problemas en el select 1: ".mysql_error());
}################################################################################################
/**
 * 
 * @global type $conexion
 * @param type $x
 */
function ruc_prefijo($x="BE") { 
global $conexion; 
$sql=mysql_query("SELECT code2,name FROM paises WHERE continent = 'Europe'  ",$conexion) or die ("Problemas en el select 1: ".mysql_error());	
	while ($reg=mysql_fetch_array($sql)){	
			echo "<option "; 
			if($reg['code2'] == $x) {echo " selected=selected ";}
			echo " value=\"$reg[code2]\">$reg[code2] - "; echo _t($reg['name']); echo "</option>";
		}
}?>