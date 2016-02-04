<?php 
/**
 * Una funcio de base del plugin
 * @return boolean
 */
function index(){ return true;  } 

/**
 * Esta funccion muestra la version del plugin instalado
 * @return type
 */
function cambios_version(){
    
        
    
    
    
    $nombre_fichero = "readme.txt";
    $gestor = fopen($nombre_fichero, "r");
    $contenido = fread($gestor, filesize($nombre_fichero));
    fclose($gestor);
        
        
    return $contenido;
}



