<?php	
// atencion	//	ayuda//	alto//	info//	ok

/**
 * 
 * @param type $tipo
 * @param type $msj
 */
function mensaje($tipo,$msj) {

switch ($tipo) {

	case "atencion" :  	            
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Atencion!</strong> '.$msj.'</div>'; 
	break;
  
  case "ayuda" :
  	    echo '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Ayuda:</strong> '.$msj.'</div>';  
	break;
  
  case "alto" :
  	    echo '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Alto:</strong> '.$msj.'</div>'; 
	break;
	
case "info" :
  	echo '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Info:</strong> '.$msj.'</div>'; 
	break;
	
  case "ok" :
  	echo '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Ok:</strong> '.$msj.'</div>';  
	break;
	
  default:
  	echo "No mensaje<br><br><br>";
	break;	  
	}


} // fin de la funcion 
?>