<?php   





/**
 * Llenamos los ficheros creados en en plugin
 * @global type $path_plugins la carpeta donde se crea los plugins
 * @global type $dbh  coneccion a la BD
 * @param type $controlador nombre del controlador
 * @param type $nombrePlugin el plugin que se esta creando
 * @return string 
 */
function contenido_controlador($controlador,$nombrePlugin){
    global $path_plugins, $dbh; 
    //$resultados = resultados($nombrePlugin);
    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);

    switch ($controlador) {  
//*************************************************     
        /**
         * caso de ser la pagina borrar.php
         */
        case 'borrar':
            $fuente =  ' <?php '."\n";
            $fuente .=  ' $pagina = "'.$nombrePlugin.'"; '."\n";
           // $fuente .= ' //include \'header.php\';  '."\n";
          //  $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/funciones.php"; '."\n";
            $fuente .= ' if (permisos_tiene_permiso(\'borrar\', \''.$nombrePlugin.'\', $u_grupo)) { '."\n";            
            $fuente .= ' $id 		= mysql_real_escape_string($_REQUEST[\'id\']); '."\n";
            $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/modelos/borrar.php"; '."\n";
            $fuente .= ' } else { '."\n";
            $fuente .= '     permisos_sin_permiso(\'borrar\', \''.$nombrePlugin.'\', $u_id_usuario); '."\n";
            $fuente .= ' } '."\n";
            
            return $fuente;
            break;
//*************************************************        
        case 'buscar':
            $fuente =  ' <?php '."\n";
            $fuente .=  ' $pagina = "'.$nombrePlugin.'"; '."\n";
          //  $fuente .= ' //include \'header.php\';  '."\n";
           // $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/funciones.php"; '."\n";
            $fuente .= ' if (permisos_tiene_permiso(\'ver\', \''.$nombrePlugin.'\', $u_grupo)) { '."\n";                        
         //   $fuente .= '     $busqueda 		= mysql_real_escape_string($_REQUEST[\'busqueda\']); '."\n";
            
            
            
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){ 
                            //$fuente .= ' $'.$reg[0].' = $_REQUEST[\''.$reg[0].'\'];     '."\n"; 
                            $fuente .= ' $'.$reg[0].' = mysql_real_escape_string($_REQUEST[\''.$reg[0].'\']);     '."\n"; 
                            $fuente .= ($i < $total_resultados-1)?" ":"";
                    }
                            $i++;
                        }        
            $fuente .= '     include "'.$path_plugins.'/'.$nombrePlugin.'/modelos/buscar.php"; '."\n";   
            $fuente .= '     include "'.$path_plugins.'/'.$nombrePlugin.'/vista/buscar.php"; '."\n";
            $fuente .= ' } else { '."\n";
            $fuente .= '     permisos_sin_permiso(\'ver\', \''.$nombrePlugin.'\', $u_id_usuario); '."\n";
            $fuente .= ' } '."\n";    
            
            
            return $fuente;
            break;
//*************************************************        
        case 'crear':
            $fuente  =  ' <?php '."\n";
            $fuente .=  ' $pagina = "'.$nombrePlugin.'"; '."\n";
           // $fuente .= ' //include \'header.php\';  '."\n";
           // $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/funciones.php"; '."\n";
            $fuente .= ' if (permisos_tiene_permiso(\'crear\', \''.$nombrePlugin.'\', $u_grupo)) { '."\n";                                                
            $fuente .= ' if(isset($_REQUEST[\'a\'])==\'crear\'){ '."\n";        
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){ 
                            //$fuente .= ' $'.$reg[0].' = $_REQUEST[\''.$reg[0].'\'];     '."\n"; 
                            $fuente .= ' $'.$reg[0].' = mysql_real_escape_string($_REQUEST[\''.$reg[0].'\']);     '."\n"; 
                            $fuente .= ($i < $total_resultados-1)?" ":"";
                    }
                            $i++;
                        }        
            $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/modelos/crear.php";  '."\n";
            $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/vista/crear.php";  '."\n";
            $fuente .= ' }else{ '."\n";
            $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/vista/crear.php";  '."\n";
            $fuente .= ' }          '."\n";   
            $fuente .= ' } else { '."\n";
            $fuente .= '     permisos_sin_permiso(\'crear\', \''.$nombrePlugin.'\', $u_id_usuario); '."\n";
            $fuente .= ' } '."\n";  
            
            
            return $fuente;
            break;
//*************************************************            
        case 'editar':
        $fuente = ' <?php '."\n";
        $fuente .= ' $pagina = "'.$nombrePlugin.'"; '."\n";
       // $fuente .= ' //include \'header.php\'; '."\n";
       // $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/funciones.php"; '."\n";
        $fuente .= ' if (permisos_tiene_permiso(\'editar\', \''.$nombrePlugin.'\', $u_grupo)) { '."\n";
            $fuente .= ' if(isset($_REQUEST[\'a\'])==\'editar\'){ '."\n";
                    $i=0;                    
                    foreach($resultados as $reg ) {                         
                            include '../magia/reg/reg.php';
                            //$fuente .= ' $'.$resultados[$i].' = mysql_real_escape_string($_REQUEST[\''.$resultados[$i].'\']);     '."\n"; 
                            $fuente .= ' $'.$reg[0].' = mysql_real_escape_string($_REQUEST[\''.$reg[0].'\']);     '."\n"; 
                            $fuente .= ($i < $total_resultados-1)?" ":"";
                    
                            $i++;
                        }                
                
                $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/modelos/editar.php";  '."\n";
                $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/reg/reg.php"; '."\n";
                $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/vista/editar.php";  '."\n";
            $fuente .= ' }else{ '."\n";
                     $fuente .= ' $id = mysql_real_escape_string($_REQUEST[\'id\']);      '."\n";
                    $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/modelos/ver.php"; '."\n";
                    $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/reg/reg.php"; '."\n";
                    $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/vista/editar.php"; '."\n";
            $fuente .= ' }  '."\n";
       
            $fuente .= ' } else { '."\n";
                $fuente .= ' permisos_sin_permiso(\'editar\', \''.$nombrePlugin.'\', $u_id_usuario); '."\n";
            $fuente .= ' } '."\n";

            return $fuente;
            
            break;   
            
//*************************************
        case 'index':
            $fuente  =  ' <?php '."\n";
            $fuente .=  ' $pagina = "'.$nombrePlugin.'"; '."\n";
        //    $fuente .= ' //include \'header.php\';  '."\n";
        //    $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/funciones.php"; '."\n";
            $fuente .= ' if (permisos_tiene_permiso(\'ver\', \''.$nombrePlugin.'\', $u_grupo)) { '."\n";            
            $fuente .= '     include "'.$path_plugins.'/'.$nombrePlugin.'/modelos/index.php"; '."\n";
            $fuente .= '     include "'.$path_plugins.'/'.$nombrePlugin.'/vista/index.php"; '."\n";
            $fuente .= ' } else { '."\n";
            $fuente .= '     permisos_sin_permiso(\'ver\', \''.$nombrePlugin.'\', $u_id_usuario); '."\n";
            $fuente .= ' } '."\n";
            return $fuente;
//*************************************************            
        case 'ver':
            $fuente  =  ' <?php '."\n";
            $fuente .=  ' $pagina = "'.$nombrePlugin.'"; '."\n";
       //     $fuente .= ' include \'header.php\';  '."\n";
       //     $fuente .= ' include "'.$path_plugins.'/'.$nombrePlugin.'/funciones.php"; '."\n";
            $fuente .= ' if (permisos_tiene_permiso(\'ver\', \''.$nombrePlugin.'\', $u_grupo)) { '."\n";
            
            $fuente .= '     $id 		= mysql_real_escape_string($_REQUEST[\'id\']);   '."\n";
            
            $fuente .= '     include "'.$path_plugins.'/'.$nombrePlugin.'/modelos/ver.php"; '."\n";            
            $fuente .= '     include "'.$path_plugins.'/'.$nombrePlugin.'/reg/reg.php"; '."\n";
            $fuente .= '     include "'.$path_plugins.'/'.$nombrePlugin.'/vista/ver.php"; '."\n";
            $fuente .= ' } else { '."\n";
            $fuente .= '     permisos_sin_permiso(\'ver\', \''.$nombrePlugin.'\', $u_id_usuario); '."\n";
            $fuente .= ' } '."\n";
            return $fuente;
            break;
//*************************************************        
        default:
            $fuente = ""; 
            return $fuente;
            break;
    }
}
/**
 * Esta funcion llena el contenido de los diferentes ficheros que se encuentran en el plugin
 * @global type $path_plugins la carpeta donde se crea los plugins
 * @global type $dbh coneccion a la BD
 * @param type $modelos 
 * @param type $nombrePlugin Ll plugin que se esta creando
 * @return string
 */
function contenido_modelos($modelos,$nombrePlugin){
    global $path_plugins, $dbh; 
    //$resultados = resultados($nombrePlugin);
    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);


    switch ($modelos) {              
        case 'borrar':
            $fuente =  ' <?php '."\n";
            $fuente .=  ' $sql=mysql_query(" '."\n";
            $fuente .=  ' DELETE FROM  '."\n";
            $fuente .=  ' '.$nombrePlugin.'  '."\n";
            $fuente .=  ' WHERE id = \'$id\' ' ."\n";
            $fuente .=  ' ",$conexion) or die ("Error ".mysql_error()); '."\n";
            $fuente .=  '  '."\n";
            $fuente .=  ' $mensaje = "Realizado"; '."\n";                        
            return $fuente;
            break;
        
        case 'buscar':
            $fuente  =  ' <?php '."\n";
            $fuente .=  ' $sql=mysql_query( '."\n";
            $fuente .=  '         "SELECT *  '."\n";
            $fuente .=  ' FROM '.$nombrePlugin.'  '."\n";
            $fuente .=  ' WHERE  '."\n";                                    
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){      
                    // esto es para correjir el error
                    $remplaza_busqueda = '$busqueda';
                    
                    //$fuente .= " $reg[0] like '%$remplaza_busqueda%'    "."\n";
                    $fuente .= " $reg[0] like '%$$reg[0]%'    "."\n";
                    $fuente .= ($i < $total_resultados-1)?" AND ":"";
                    }
                $i++;
            } 
            $fuente .=  ' ORDER BY id DESC    '."\n";
            $fuente .=  ' ",$conexion) or die ("Error:".mysql_error());  '."\n";          
            //$fuente .=  ' $reg = mysql_fetch_array($sql);	  '."\n";          
            return $fuente;
            break;   
            
        case 'crear':
            $fuente =  ' <?php '."\n";
            $fuente .=  ' $sql = "INSERT INTO '.$nombrePlugin.' ( '."\n";                                    
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){ 
                    $fuente .= ' '.$reg[0].' '; 
                    $fuente .= ($i < $total_resultados-1)?" , ":"";
                    }
                $i++;
            }
            $fuente .=  ' ) VALUES ( '."\n";
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){        
                    $fuente .= ' :'.$reg[0].' '; 
                    $fuente .= ($i < $total_resultados-1)?" , ":"   )\";  " ."\n";
                    }
                $i++;
            }
            $fuente .=  ' $stmt = $dbh->prepare($sql); '."\n";
            $fuente .=  ' $stmt->execute(array( '."\n";            
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){        
                    $fuente .= ' ":'.$reg[0].'"=>"$'.$reg[0].'" '."";
                    $fuente .= ($i < $total_resultados-1)?" , ":"";
                    }
                $i++;
            }
            $fuente .=  '             ) '."\n";
            $fuente .=  ' ); '."\n";
            $fuente .=  ' $mensaje = "Realizado con exito"; '."\n";
            return $fuente;
            break;
        
        case 'editar':
            $fuente =  ' <?php  '."\n";
            $fuente .=  ' $sql=mysql_query(" UPDATE '.$nombrePlugin.' SET  '."\n";            
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){     
                    $fuente .= ' '.$reg[0].' = \'$'.$reg[0].'\'  '."\n";
                    $fuente .= ($i < $total_resultados-1)?" , ":"";
                    }
                $i++;
            }                                    
            $fuente .=  ' WHERE id = \'$id\' ",$conexion) or die ("Error: ".mysql_error());   '."\n";
            return $fuente;
            break;
        
        
        case 'index':
            $fuente =  '<?php '."\n";
            $fuente .= '$sql=mysql_query("SELECT * FROM '.$nombrePlugin.' ORDER BY id DESC ",$conexion) '."\n";
            $fuente .= 'or die ("Error: en el fichero:" .__FILE__ .\' linea: \'. __LINE__ .\'  \'.mysql_error());	  '."\n";
           // $fuente .= '$reg = mysql_fetch_array($sql);	  '."\n";
            
            return $fuente;
            break;
        
        case 'ver':
            $fuente  =  ' <?php '."\n";
            $fuente .=  '$sql=mysql_query( '."\n";
            $fuente .= ' "SELECT * FROM '.$nombrePlugin.' WHERE id = \'$id\' ORDER BY id DESC   ",$conexion) 	  '."\n";
            $fuente .= ' or die ("Error: en el fichero:" .__FILE__ .\' linea: \'. __LINE__ .\' / \'.mysql_error());	'."\n";
            $fuente .= ' $reg = mysql_fetch_array($sql);	  '."\n";
            return $fuente;
            break;
        
        default:
            $fuente = ""; 
            return $fuente;
            break;
    }
}

/**
 * Esta funcion llena el conteido de las paginas que se crean en la vista del plugin
 * @global type $path_plugins
 * @global type $dbh
 * @param type $vista
 * @param type $nombrePlugin
 * @return string
 */

function contenido_vista($vista,$nombrePlugin){
    global $path_plugins, $dbh; 
    //$resultados = resultados($nombrePlugin);
    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);


    switch ($vista) {  



case 'borrar':    
    
                $fuente  = '<h2>Atencion</h2>
                <p>Ud esta a por borrar definiticamente este registro, desea hacerlo?</p>
                <a class="btn btn-danger" href="index.php?p='.$nombrePlugin.'&c=borrar&id=<?php echo $id; ?>">Si,borrar</a>';

            return $fuente;
            break; 

//*************************************************            
case 'buscar':                
            
            $fuente = '<h2>
                        <?php echo _t("Resultados de su busqueda"); ?>                            
                        </h2>';        
                
            $fuente .= '
<table class="table table-striped">
    <thead>
        <tr> ';
                
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){    
                $fuente .=  ' <th><?php echo _t("'.  ucfirst($reg[0]).'"); ?></th> '."\n";
                    }
    $i++;
    }      
    $fuente .=  ' <th><?php echo _t("Accion"); ?></th> '."\n";
    $fuente .=' </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "'.$nombrePlugin.'", $u_grupo)){
             //   include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "'.$path_plugins.'/'.$nombrePlugin.'/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "'.$nombrePlugin.'", $u_grupo)){
                    include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr.php";
                   // include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr_editar.php";
                }else{
                    include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "'.$nombrePlugin.'", $u_grupo)){
             //   include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


'; 
                                    
            return $fuente;
            break;          
        
case 'crear':   
            $fuente    = '<h2><?php echo _t("Nuevo '.$nombrePlugin.'"); ?></h2> '."\n";  
            $fuente   .=  '<form class="form-horizontal" action="index.php" method="post"> '."\n";            
            $fuente   .=  '<input type="hidden" name="p" value="'.$nombrePlugin.'"> '."\n";
            $fuente   .=  '<input type="hidden" name="c" value="crear"> '."\n";
            $fuente   .=  '<input type="hidden" name="a" value="crear"> '."\n";
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){       
                            $fuente  .=  '     <div class="form-group"> '."\n";
                            $fuente  .=  '     <label for="'.$reg[0].'" class="col-sm-2 control-label">'.ucfirst($reg[0]).'</label> '."\n";
                            $fuente  .=  '     <div class="col-sm-10"> '."\n";
                            $fuente  .=  '       <input type="text" class="form-control" name="'.$reg[0].'" id="'.$reg[0].'" placeholder="'.  ucfirst($reg[0]).'"> '."\n";
                            $fuente  .=  '     </div> '."\n";
                            $fuente  .=  '   </div> '."\n\n\n"; 
                    }
                $i++;
            }
            $fuente  .=  ' <div class="form-group"> '."\n";
            $fuente  .=  '     <div class="col-sm-offset-2 col-sm-10"> '."\n";
            $fuente  .=  '       <button type="submit" class="btn btn-primary">Registrar</button> '."\n";
            $fuente  .=  '     </div> '."\n";
            $fuente  .=  '   </div> '."\n";
            $fuente  .=  ' </form> '."\n";


            
            
            return $fuente;
            break;
            
//*************************************************            
case 'editar':                
                $fuente  = '<h2><?php echo _t("Editar"); ?></h2>';   
                $fuente .=  '     <form class="form-horizontal" method="post" action="index.php"> '."\n";                
                $fuente .=  '     <input type="hidden" name="p" value="'.$nombrePlugin.'"> '."\n";                
                $fuente .=  '     <input type="hidden" name="c" value="editar"> '."\n";                
                $fuente .=  '     <input type="hidden" name="a" value="editar"> '."\n";                
                $fuente .=  '     <input type="hidden" name="id" value="<?php echo $id; ?>"> '."\n";
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){    
                            $fuente .=  ' <div class="form-group"> '."\n";
                            $fuente .=  '     <label for="'.$reg[0].'" class="col-sm-2 control-label">'.  ucfirst($reg[0]).'</label> '."\n";
                            $fuente .=  '     <div class="col-sm-10"> '."\n";
                            $fuente .=  '       <input type="text" class="form-control" name="'.$reg[0].'" id="'.$reg[0].'" placeholder="'.  ucfirst($reg[0]).'" value="<?php echo $'.$reg[0].'; ?>"> '."\n";
                            $fuente .=  '     </div> '."\n";
                            $fuente .=  '   </div> '."\n\n\n";
                    }
                            $i++;
                        }

                $fuente .=  '   <div class="form-group"> '."\n";
                $fuente .=  ' <div class="col-sm-offset-2 col-sm-10"> '."\n";
                $fuente .=  '       <button type="submit" class="btn btn-primary">Editar</button> '."\n";
                $fuente .=  '     </div> '."\n";
                $fuente .=  '   </div>     '."\n";
                $fuente .=  ' </form> '."\n";            
            return $fuente;
            break; 
            
//*************************************************            
case 'index':                
            
            $fuente = '<h2>
                        <?php echo _t("Lista de '.$nombrePlugin.'"); ?>     
                        <a type="button" class="btn btn-primary navbar-btn" href="?p='.$nombrePlugin.'&c=crear">Nueva</a>
                        </h2>';        
                
            $fuente .= '
<table class="table table-striped">
    <thead>
        <tr> ';
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){     
    $fuente .=  ' <th><?php echo _t("'.  ucfirst($reg[0]).'"); ?></th> '."\n";
                    }
    $i++;
    }      
    $fuente .=  ' <th><?php echo _t("Accion"); ?></th> '."\n";
    $fuente .=' </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "'.$nombrePlugin.'", $u_grupo)){
             //   include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "'.$path_plugins.'/'.$nombrePlugin.'/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "'.$nombrePlugin.'", $u_grupo)){
                    include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr.php";
                   // include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr_editar.php";
                }else{
                    include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "'.$nombrePlugin.'", $u_grupo)){
             //   include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


'; 
                                    
            return $fuente;
            break;  
//*************************************************            
case 'menu':                
            
            $fuente = '<h1>Buscar</h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="'.$nombrePlugin.'">
    <input  type="hidden" name="c" value="buscar">';
  
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){ 
                /*$fuente .=  ' <div class="form-group">
            <label for="'.$nombrePlugin.'">'.$reg[0].'</label>
            <select class="form-control" name="'.$nombrePlugin.'">
                <option value="todas">Todas</option>
                <?php '.$nombrePlugin.'_add(); ?>
              </select>
          </div> '."\n";*/
                
          
          
          
$fuente .= '
  <div class="form-group">
    <label for="exampleInputEmail1">'.  ucfirst($reg[0]).'</label>
    <input type="text" class="form-control" name="'.$reg[0].'" id="'.$reg[0].'" placeholder="'.$reg[0].'">
  </div>
   ';         
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
    }
    
    $i++;
    }      
    
    

    

    $fuente .= '    
  <button type="submit" class="btn btn-default">Buscar</button>
</form>'; 
    

                                    
            return $fuente;
            break;  


            
    
            

//*******************************************************
            case 'tr':   
            $fuente   =  ' <?php  '."\n";                    
            $fuente .= '    echo \' <tr>';
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){
                        $fuente .=  ' <td>\'.$'.$reg[0].'.\'</td> '."\n";
                    }
                        
                    $i++;
                    }      
               $fuente .=' <td>
                    <a href=\'.$_SERVER[\'PHP_SELF\'].\'?p='.$nombrePlugin.'&c=ver&id=\'.$id.\'>Ver</a> |  
                    <a href=\'.$_SERVER[\'PHP_SELF\'].\'?p='.$nombrePlugin.'&c=editar&id=\'.$id.\'>Editar</a>  
                      
                </td></tr>\';  ';   

            return $fuente;
            break;  
            



//**************************************************************
case 'tr_anadir':  
        $fuente  = '
            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="'.$nombrePlugin.'">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr>';
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){   
$fuente .=  ' <td><input class="form-control" type="text" name="'.$reg[0].'" value="" placeholder="'.  ucfirst($reg[0]).'"></td> '."\n";
                    }
                    $i++;
                    }    
        $fuente .='<td><input class="btn btn-primary" type="submit" value="Registrar" ></td>        
    </tr>
</form> ';
            return $fuente;
            break; 
            
//************************************************************            
case 'tr_editar':   
    
    
        $fuente  = ' <?php  '."\n";
        $fuente .= '$borrar = (permisos_tiene_permiso("borrar", "'.$nombrePlugin.'", $u_grupo))?\'<a class="btn btn-danger" href="index.php?p='.$nombrePlugin.'&c=borrar&a=borrar&id=\'.$id.\'">Borrar</a>\':\'\'; ?>
';

        

$fuente .= '<form method="post" action="index.php" >
    <input type="hidden" name="p" value="'.$nombrePlugin.'">
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="a" value="editar">    
    <input type="hidden" name="id" value="<?php echo $id; ?>">    
    <tr>';
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){   
            $fuente .=  ' <td><input class="form-control" type="text" name="'.$reg[0].'" value="<?php echo $'.$reg[0].'; ?>" placeholder="'.  ucfirst($reg[0]).'"></td> '."\n";
                    }
            $i++;
        } 
        
            $fuente .= '<td><input class="btn btn-primary" type="submit" value="Registrar" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> '; 
        
            return $fuente;
            break;  
            
//************************************************************            
case 'tr_buscar':   
$fuente = '<form method="get" action="index.php" >
    <input type="hidden" name="p" value="'.$nombrePlugin.'">
    <input type="hidden" name="c" value="buscar">       
    <tr>';
        
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){   
            $fuente .=  ' <td><input class="form-control" type="text" name="'.$reg[0].'" value="" placeholder="'.ucfirst($reg[0]).'"></td> '."\n";
                    }
            $i++;
        } 
        
            $fuente .= '<td><input class="btn btn-info" type="submit" value="Buscar" >
        
        </td>        
    </tr>
</form> '; 
        
            return $fuente;
            break;  
            
//**********************************************
case 'ver':                
                $fuente =  '<h1>Detalles</h1> '."\n";
                /*$fuente .= '<h2>
                            <?php echo _t("Lista de '.$nombrePlugin.'"); ?>     
                            <a type="button" class="btn btn-primary navbar-btn" href="?p='.$nombrePlugin.'&c=crear">Nueva</a>
                            </h2>';   */
                
                
                $fuente .=  '     <form class="form-horizontal" method="" action=""> '."\n";
                $fuente .=  '     <input type="hidden" name="p" value="'.$nombrePlugin.'"> '."\n";                
                $fuente .=  '     <input type="hidden" name="c" value="editar"> '."\n";                                              
                $fuente .=  '     <input type="hidden" name="id" value="<?php echo $id; ?>"> '."\n";
                    $i=0;
                    $usar_id = 0; // 0 no usa, -1 si usa
                    foreach($resultados as $reg ) {     
                    if($i > $usar_id){    
                            $fuente .=  ' <div class="form-group"> '."\n";
                            $fuente .=  '     <label for="'.$reg[0].'" class="col-sm-2 control-label">'.  ucfirst($reg[0]).'</label> '."\n";
                            $fuente .=  '     <div class="col-sm-10"> '."\n";
                            $fuente .=  '       <input type="text" class="form-control" name="'.$reg[0].'" id="'.$reg[0].'" placeholder="'.  ucfirst($reg[0]).'" value="<?php echo $'.$reg[0].'; ?>" disabled=""> '."\n";
                            $fuente .=  '     </div> '."\n";
                            $fuente .=  '   </div> '."\n";
                            $fuente .=  '  '."\n\n";
                    }
                            $i++;
                        }

                $fuente .=  '   <div class="form-group"> '."\n";
                $fuente .=  ' <div class="col-sm-offset-2 col-sm-10"> '."\n";
                $fuente .=  '       <button type="submit" class="btn btn-primary">Editar</button> '."\n";
                $fuente .=  '     </div> '."\n";
                $fuente .=  '   </div>     '."\n";
                $fuente .=  ' </form> '."\n";            
            return $fuente;
            break;            

        default:
            $fuente = ""; 
            return $fuente;
            break;
    }
}

/**
 * Esta función llena las páginas que se crean los registros del plugin
 * @global type $path_plugins
 * @global type $dbh
 * @param type $controlador
 * @param type $nombrePlugin
 * @return string
 */
function contenido_reg($controlador,$nombrePlugin){
    global $path_plugins, $dbh; 
    //$resultados = resultados($nombrePlugin);
    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);
    
    
    switch ($controlador) {                    
    case 'get':            
        $fuente  = ' <?php '."\n";
            $i=0;
                foreach($resultados as $reg ) {       
                    $var = $reg[0];
                    //$fuente .= " $$var = mysql_real_escape_string($_GET['$var']);   ";    
                    $fuente .= '  $'.$var.' = mysql_real_escape_string($_GET[\''.$var.'\']); '  ."\n";    
                $i++;
            }                 
        
        return $fuente;
        break;
    
    case 'post':            
               $fuente  = ' <?php '."\n";
                $i=0;
                foreach($resultados as $reg ) {       
                    $var = $reg[0];
                    $fuente .= '  $'.$var.' = mysql_real_escape_string($_POST[\''.$var.'\']); '  ."\n";                     
                $i++;
            }  
        return $fuente;
        break;
//****************** reg **************************    
    case 'reg':            
        $fuente  = ' <?php '."\n";
        $i=0;
                foreach($resultados as $reg ) {       
                    $var = $reg[0];
                   $fuente .= '  $'.$var.' = $reg[\''.$var.'\']; '  ."\n";                                
                $i++;
        
                }
        
        return $fuente;
        break;
    
    case 'request':            
               $fuente  = ' <?php '."\n";
                $i=0;
                foreach($resultados as $reg ) {       
                    $var = $reg[0];
                    $fuente .= '  $'.$var.' = mysql_real_escape_string($_REQUEST[\''.$var.'\']); '  ."\n";  
                $i++;
            }
        return $fuente;
        break;
    
    
        default:
            $fuente = ""; 
            return $fuente;
            break;
    }
}

/**
 * Esta funcion llena el contenido de los ficheros extras del plugin
 * @global type $path_plugins
 * @global type $dbh
 * @param type $pagina
 * @param type $nombrePlugin
 * @return string
 */
function contenido_plugin($pagina,$nombrePlugin){
    global $path_plugins, $dbh; 
    //$resultados = resultados($nombrePlugin);
    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);


    switch ($pagina) {
        case 'funciones.php':
            
            $fuente = '<?php 
                function '.$nombrePlugin.'_campo($id, $campo){
                    global $conexion; 
                $sql=mysql_query(
                        "SELECT $campo FROM '.$nombrePlugin.' WHERE id = \'$id\'   ",$conexion) or die ("Error:".mysql_error());
                $reg = mysql_fetch_array($sql);
                return $reg[$campo];    
                }
                
function '.$nombrePlugin.'_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM '.$nombrePlugin.'  ",$conexion) or die ("Error:".mysql_error());
while ($reg = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$reg[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$reg[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$reg[0]\">$reg[0]</option>";
} 
}



'; 
            
            
            
            
            
            
            
            
            
            return $fuente;
            break;
        case 'readme.txt':
            $fuente = "Plugin: $nombrePlugin "; 
            return $fuente;
            break;
        
        case 'COPYING':
            $fuente = "Aca escriba el texto de la licencia del plugin: $nombrePlugin "; 
            return $fuente;
            break;
        
        
        case '.gitignore':
            $fuente = "poner las exepciones para el github "; 
            return $fuente;
            break;
        
        
        case 'version':
            $fuente = "0.01 "; 
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


function contenido_admin($pagina){
   // global $path_plugins, $dbh; 
    //$resultados = resultados($nombrePlugin);
   // include "./modelos/v_crea_plug.php";
   // $total_resultados = count($resultados);


    switch ($pagina) {
        case 'bd.php':            
            $fuente = '<?php  
                        $servidor = "localhost"; 
                        $bdatos = "blog"; 
                        $usuario = "root"; 
                        $clave = "";';                        
            return $fuente;
            break;
        
        case 'conec.php':
            $fuente = '<?php	
$dbh = new PDO("mysql:host=$servidor; dbname=$bdatos",   $usuario, $clave);
'; 
            return $fuente;
            break;
        
        case 'coneccion.php':
            $fuente = '<?php
$conexion = mysql_connect("$servidor", "$usuario", "$clave") or die("Problemas en la conexion");
mysql_select_db("$bdatos", $conexion) or die("Problemas conexion en local");

'; 
            return $fuente;
            break;
        
        
        case 'funciones.php':
            $fuente = '<?php 

function incluir_funciones(){
    
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


function traduccion_verifica_si_existe($frase) {
    global $conexion;
   $sql=mysql_query(""
           . "SELECT traduccion "
           . "FROM idiomas "
           . "WHERE frase = \'$frase\'  ",$conexion) or die ("Error:".mysql_error());    
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
           . "WHERE frase = \'$frase\' AND idioma = \'$idioma\'  ",$conexion) or die ("Error:".mysql_error());    
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
   $sql=mysql_query("INSERT INTO idiomas (frase) values(\'$frase\')   ",$conexion) or die ("Error:".mysql_error());        
}

function traduccion_registra_traduccion($frase, $idioma, $traduccion) {
    global $conexion;
   $sql=mysql_query("UPDATE idiomas SET idioma=\'$idioma\', traduccion=\'$traduccion\' WHERE frase = \'$frase\' ",$conexion) or die ("Error:".mysql_error());        
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
    $activa = ($selecionado == $menu_items[$i] )? \'active\' : 0 ;    
    echo \'<li class="\'.$activa.\'"><a href="?p=\' . $menu_items[$i] . \'&c=index">\' . ucwords($menu_items[$i]) . \'</a></li>\';
    
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



'; 
            return $fuente;
            break;
        
        
        case 'index':
            $fuente = '<?php 
$u_grupo = "admin";
include "bd.php";
include "conec.php";
include "coneccion.php";
include "funciones.php";
include "permisos.php";
incluir_funciones();
?>
<?php
    $p = (isset($_REQUEST[\'p\']))?  $_REQUEST[\'p\']  : "admin" ; 
    $c = (isset($_REQUEST[\'c\']))?  $_REQUEST[\'c\']  : "index" ; 
    
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="MagiaPHP">
    <link rel="icon" href="../../favicon.ico">
    <title>Admin</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="starter-template.css" rel="stylesheet">
    <link href="modelo.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" 
                    class="navbar-toggle collapsed" 
                    data-toggle="collapse" 
                    data-target="#navbar" 
                    aria-expanded="false" 
                    aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">MagiaPHP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">                                       
                <?php
                magia_menu($p);
                ?>
            </ul>
        </div>
    </div>
</nav>
      
      
<div class="container">  
<div class="row">
    <div class="col-lg-12">
    <?php
    $url = "./$p/controlador/";
    $url .= "$c";
    $url .= ".php";       
    include "$url";      
    ?>
    </div>
</div>
    </div><!-- /.container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
'; 
            return $fuente;
            break;
        
        case 'modelo.css':
            $fuente = 'body {
  padding-top: 50px;
}
.starter-template {
  padding: 40px 15px;
  text-align: center;
}'; 
            return $fuente;
            break;
        
        
        case 'permisos.php':
            $fuente = '<?php 
function permisos_tiene_permiso($pagina,$accion,$grupo){
    return TRUE;
}'; 
            return $fuente;
            break;
        
        default :
            return;
            break;
    }
}


/**
 * Esta funcion es la que crea los diferentes ficheros dentro de : Modelos, vista, controlador, reg, del plugin
 * @global type $path_magia_plugins
 * @global type $dbh
 * @param type $nombrePlugin
 * @param type $mvcg
 */
function magia_crear_ficheros_dentro_mvc($nombrePlugin,$mvcg){
    global  $path_instalacion_plugins, $dbh; 

switch ($mvcg) {
case 'controlador':
        $c = ['index','ver','crear','editar','borrar','buscar'] ;
        $total = count($c);
        
        $i=0;
        while ($i<$total) {  
         
        $destino = "$path_instalacion_plugins/$nombrePlugin/$mvcg/$c[$i].php"; 
        
        // este va a ser el contedido que vamos a escribir en el documento
        $contenido = contenido_controlador($c[$i],$nombrePlugin);
      
        
        $fp = fopen($destino, 'w');
        fwrite($fp, $contenido);        
        fclose($fp);
        $i++;  
        }
        break;        
case 'modelos':
    $c = ['index','ver','crear','editar','borrar','buscar'] ;     
    $total = count($c);
    $i=0;
        while ($i<$total) {        
         $destino = "$path_instalacion_plugins/$nombrePlugin/$mvcg/$c[$i].php"; 
                 // este va a ser el contedido que vamos a escribir en el documento
        $contenido = contenido_modelos($c[$i],$nombrePlugin );         
        //$contenido = $destino ;
        
        $fp = fopen($destino, 'w');
        fwrite($fp, $contenido);        
        fclose($fp);
        $i++;  
        }
        break;              
case 'reg':
    $c = ['get','post','reg','request'] ;   
    $total = count($c);
    $i=0;
        while ($i<$total) {
         $destino = "$path_instalacion_plugins/$nombrePlugin./$mvcg/$c[$i].php"; 
                 // este va a ser el contedido que vamos a escribir en el documento
        $contenido = contenido_reg($c[$i],$nombrePlugin );
         //$contenido = $destino ;
        $fp = fopen($destino, 'w');
        fwrite($fp, $contenido);        
        fclose($fp);
        $i++;  
        }
        break;        
case 'vista':
    //estas son las paginas  a crear
    $c = ['borrar','buscar','crear','editar','index','menu','tr','tr_anadir','tr_editar','tr_buscar','ver'] ;    
    $total = count($c);
    $i=0;
        while ($i<$total) {        
         $destino = $path_instalacion_plugins.'/'.$nombrePlugin.'/'.$mvcg.'/'.$c[$i].'.php'; 
                 // este va a ser el contedido que vamos a escribir en el documento
        $contenido = contenido_vista($c[$i],$nombrePlugin );
        // $contenido = $destino ;
        $fp = fopen($destino, 'w');
        fwrite($fp, $contenido);        
        fclose($fp);
        $i++;  
        }
        break;        
case 'raiz':
       
         $c = ['funciones.php','readme.txt','COPYING','.gitignore','version','menu'] ;       
       //$c = paginas_por_defecto_plugins('reg');       
       $total = count($c);
       $i=0;
        while ($i<$total) {        
            $destino = $path_instalacion_plugins.'/'.$nombrePlugin.'/'.$c[$i].''; 
           // este va a ser el contedido que vamos a escribir en el documento
          // $contenido = $destino ; 
           $contenido = contenido_plugin($c[$i],$nombrePlugin); 
           $fp = fopen($destino, 'w');
           fwrite($fp, $contenido);        
           fclose($fp);
           echo "$c[$i] se ha llenado el contenido <br>"; 
           $i++;  
        }
        
        break;
        
    default :
        break;
}


    
    


    
} 



function magia_crear_ficheros_en_proyecto($nombreProyecto){

    $camino_instalacion = "./blog/"; 


     $c = ['bd.php','conec.php','coneccion.php','funciones.php','index.php','modelo.css','permisos.php'] ;
        
     

     
       $total = count($c);
       $i=1;
       
       mkdir("$camino_instalacion/".$c[$i]);
       
       
        while ($i<$total) {        
           $destino = $path_instalacion_plugins.'/'.$c[$i].''; 

           $contenido = contenido_admin($c[$i]); 
           $fp = fopen($destino, 'w');
           fwrite($fp, $contenido);        
           fclose($fp);
           echo "$c[$i] se ha llenado el contenido <br>"; 
           $i++;  
        }


    
    


    
} 



/**
 * Esta funcion sirbe para traducir las frases del sitio web
 * @param type $palabra
 * @return type
 */
function _t($palabra){
    return $palabra;
}


    
   
































