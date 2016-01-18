<?php
// Creado por Robinson Coello 
// Mande.ec
// robincoello@hotmail.com
/**
 * Verifica la validez de la cedula ecuatoriana
 * @param type $cedula
 * @param type $mostrar_error
 * @return boolean
 */
function verificar_cedula($cedula,$mostrar_error=0) {	
// Verificamos si lo ingresado son  numeros
   	 
// verificamos si el numero de cedula tiene 10 digitos
if (strlen($cedula)=='10') {

// verificamos si los dos primeros digitos son inferiores a 24 y superiores a 1
$c = substr($cedula,0,2); // extraemos los primeros digitos	

// hacemos la verificacion
if( $c>='1' && $c<='24') {

// verificamos si el tercer digito es menor a 6
if ($cedula[2]<6) {

// calculamos el digito de control
$imp="0"; // ponemos a cero los impares
$par="0"; // los pares
$c=0; // variable temporal
$d=0; // otra

for ($i=0; $i < 9; $i++) {
if($i%2==0) {
if ( ($cedula[$i]*2) > 9 ) {
// le restamos 9 si la suma es superior a 9 a la multiplicacion por 2
$c= ($cedula[$i]*2)-9 ;} else {
// si no pues multiplicamos por dos y ya
$c=($cedula[$i]*2);}
$imp = $c+$imp;
}else{
if ( ($cedula[$i]*1) > 9 ) {
// si es superior a 9 le restamos 9 a la multiplicacion por 1
$d= ($cedula[$i]*1)-9 ;} else {
// si no pues solo multiplicamos
$d=($cedula[$i]*1);}
$par = $d+$par;
}
} // sumamos resultados de los pares e impares
$suma = $par+$imp;

//Descontamos la decena superior
$z=0;
while($suma%10!=0) { $suma++; $z++; }
// comparamos si el ultimo digito de la cedula es igual al resultado obtenido.
if($z==$cedula[9]) {	
 	
	if($mostrar_error==1) {echo "El n&uacute;mero es correcto ";}else {return TRUE;} // cedula correcta	  
	
// damos errores todo el resto
}else { if($mostrar_error==1) {echo "El &uacute;ltimo n&uacute;mero (digito de control) no es correcto ";}else {return FALSE;}  }

}else { if($mostrar_error==1) {echo "El tercer d&iacute;gito debe ser inferior a 6 (0,1,2,3,4,5) ";}else {return FALSE;}  }

}else { if($mostrar_error==1) {echo "Los dos primeros n&uacute;meros deben ser superior a 1 e inferior o igual a 24 ";}else {return FALSE;}  }

} else { if($mostrar_error==1) {echo "El n&uacute;mero ingresado no tiene 10 d&iacute;gitos ";}else {return FALSE;} }  // el largo es diferente de 10 digitos



} // fin de la function
?>	 




 