<?php	
// http://www.latinos.be/facturas/f.php?id=c354ef36c0262f87286079b2e2aeb013
// esta funcion codifica la comunicacion extructurada y da una clave para 
// cargar el PDF
// $ce = "+++000/0020/14162+++";

function clave_factura($ce) {

$clave = md5($ce);

return $clave ;


}

?>														  



