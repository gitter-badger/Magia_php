<?php 

/**
 * Esto nos permite incluir las funciones de los plugins
 * @return type
 */
function incluir_funciones(){
    //$funciones = ['articulos','autores','Casa'];
    $funciones = listar_directorios_ruta();
    foreach ($funciones as $valor) {
        
        $f = "./$valor/funciones.php"; 
        
        if(file_exists($f)){
            include $f; 
        }
        else {
            $sms = "El plugin $valor no existe";  
            return $sms ;
        }
        
    }
}

function _traducir($f){
    echo $f;
}

function _t($frase){
      //$frase = 'Inicio';
      $idioma = 'gb';
      $traduccion = 'Home';
      
      if(traduccion_verifica_si_existe($frase)){
          //echo "existe palabra - "; 
      } else {
         // echo "no existe p"; 
          traduccion_registra_frase($frase);
      }
      
      
      if(traduccion_verifica_si_existe_traduccion($frase, $idioma)){
         // echo "existe t - "; 
      } else {
         // echo "no existe t"; 
          traduccion_registra_traduccion($frase, $idioma, $traduccion);
      }
    
      return $frase;
}

/**
 * Verifica si existe la frase en la BDD de idiomas
 * @global type $conexion
 * @param type $frase
 * @param type $idioma
 * @return boolean
 */
function traduccion_verifica_si_existe($frase) {
    global $conexion;
   $sql=mysql_query(""
           . "SELECT traduccion "
           . "FROM idiomas "
           . "WHERE frase = '$frase'  ",$conexion) or die ("Error:".mysql_error());    
    $total = mysql_num_rows($sql);
    if($total > 0){
        return TRUE;
    }else{
        return FALSE;
    } 
    
}

function traduccion_verifica_si_existe_traduccion($frase, $idioma) {
    global $conexion;
   $sql=mysql_query(""
           . "SELECT traduccion "
           . "FROM idiomas "
           . "WHERE frase = '$frase' AND idioma = '$idioma'  ",$conexion) or die ("Error:".mysql_error());    
    $total = mysql_num_rows($sql);
    if($total > 0){
        return TRUE;
    }else{
        return FALSE;
    } 
    
}

/**
 * registra la frase en la BDD de idiomas
 * @global type $conexion
 * @param type $frase
 */
function traduccion_registra_frase($frase) {
    global $conexion;
   $sql=mysql_query("INSERT INTO idiomas (frase) values('$frase')   ",$conexion) or die ("Error:".mysql_error());        
}

function traduccion_registra_traduccion($frase, $idioma, $traduccion) {
    global $conexion;
   $sql=mysql_query("UPDATE idiomas SET idioma='$idioma', traduccion='$traduccion' WHERE frase = '$frase' ",$conexion) or die ("Error:".mysql_error());        
}





function listar_directorios_ruta($ruta="./"){ 
   // abrir un directorio y listarlo recursivo 
   if (is_dir($ruta)) { 
      if ($dh = opendir($ruta)) { 
         $carpetas = [];
          while (($file = readdir($dh)) !== false) { 
            //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
            //mostraría tanto archivos como directorios 
            //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file); 
            if (is_dir($ruta . $file) && $file!="." && $file!=".."){ 
               //solo si el archivo es un directorio, distinto que "." y ".." 
               
               $c = array_push($carpetas, $file);
               
                
              //  echo "<br>Directorio: $ruta$file"; 
               
              // listar_directorios_ruta($ruta . $file . "/"); 
            } 
         } 
      closedir($dh); 
      } 
}else {
      echo "<br>No es ruta valida"; 
}
return $carpetas;

}



function magia_menu($selecionado){
$menu_items = listar_directorios_ruta();
$menu_total_items = count(listar_directorios_ruta());
$i = 0;
while ($i < $menu_total_items) {    
    $activa = ($selecionado == $menu_items[$i] )? 'active' : 0 ;    
    echo '<li class="'.$activa.'"><a href="?p=' . $menu_items[$i] . '&c=index">' . ucwords($menu_items[$i]) . '</a></li>';
    
    $i++;    
}

}




function estatus($estatus) {
    if($estatus==0){
        return _t("Activo");
    }else {
        return _t("Bloqueado");
    }
}



?>