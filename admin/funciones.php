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
            $fuente .= '     $busqueda 		= mysql_real_escape_string($_REQUEST[\'busqueda\']); '."\n";
            $fuente .= '     include "'.$path_plugins.'/'.$nombrePlugin.'/modelos/busqueda.php"; '."\n";            
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
                        foreach($resultados as $reg ) {
                            //$fuente .= ' $'.$reg[0].' = $_REQUEST[\''.$reg[0].'\'];     '."\n"; 
                            $fuente .= ' $'.$reg[0].' = mysql_real_escape_string($_REQUEST[\''.$reg[0].'\']);     '."\n"; 
                            $fuente .= ($i < $total_resultados-1)?" ":"";
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
                foreach($resultados as $reg ) {       
                    // esto es para correjir el error
                    $remplaza_busqueda = '$busqueda';
                    
                    $fuente .= " $reg[0] like '%$remplaza_busqueda%'    "."\n";
                    $fuente .= ($i < $total_resultados-1)?" OR ":"";
                $i++;
            } 
            $fuente .=  ' ORDER BY id DESC    '."\n";
            $fuente .=  ' ",$conexion) or die ("Error:".mysql_error());  '."\n";          
            $fuente .=  ' $reg = mysql_fetch_array($sql);	  '."\n";          
            return $fuente;
            break;   
            
        case 'crear':
            $fuente =  ' <?php '."\n";
            $fuente .=  ' $sql = "INSERT INTO '.$nombrePlugin.' ( '."\n";                                    
            $i=0;
                    foreach($resultados as $reg ) { 
                    $fuente .= ' '.$reg[0].' '; 
                    $fuente .= ($i < $total_resultados-1)?" , ":"";
                $i++;
            }
            $fuente .=  ' ) VALUES ( '."\n";
            $i=0;
                foreach($resultados as $reg ) {        
                    $fuente .= ' :'.$reg[0].' '; 
                    $fuente .= ($i < $total_resultados-1)?" , ":"   )\";  " ."\n";
                $i++;
            }
            $fuente .=  ' $stmt = $dbh->prepare($sql); '."\n";
            $fuente .=  ' $stmt->execute(array( '."\n";            
            $i=0;
                foreach($resultados as $reg ) {        
                    $fuente .= ' ":'.$reg[0].'"=>"$'.$reg[0].'" '."";
                    $fuente .= ($i < $total_resultados-1)?" , ":"";
                    
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
                foreach($resultados as $reg ) {       
                    $fuente .= ' '.$reg[0].' = $'.$reg[0].' ';
                    $fuente .= ($i < $total_resultados-1)?" , ":"";
                $i++;
            }                                    
            $fuente .=  ' WHERE id = \'$id\' ",$conexion) or die ("Error: ".mysql_error());   '."\n";
            return $fuente;
            break;
        
        
        case 'index':
            $fuente =  '<?php '."\n";
            $fuente .= '$sql=mysql_query("SELECT * FROM '.$nombrePlugin.' ORDER BY id DESC ",$conexion) ';
            $fuente .= 'or die ("Error: en el fichero:" .__FILE__ .\' linea: \'. __LINE__ .\'  \'.mysql_error());	  '."\n";
            $fuente .= '$reg = mysql_fetch_array($sql);	  '."\n";
            
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
case 'buscar':                
                $fuente =  '     <form class="form-horizontal" method="" action=""> '."\n";
                $fuente .=  '     <input type="hidden" name="accion" value="editar"> '."\n";                
                $fuente .=  '     <input type="hidden" name="id" value="<?php echo $id; ?>"> '."\n";
                        $i=0;
                        foreach($resultados as $reg ) {     
                            $fuente .=  ' <div class="form-group"> '."\n";
                            $fuente .=  '     <label for="'.$reg[0].'" class="col-sm-2 control-label">'.ucfirst($reg[0]).'</label> '."\n";
                            $fuente .=  '     <div class="col-sm-10"> '."\n";
                            $fuente .=  '       <input type="text" class="form-control" name="'.$reg[0].'" id="'.$reg[0].'" placeholder="'.$reg[0].'" value="<?php echo '.$reg[0].'; ?>"> '."\n";
                            $fuente .=  '     </div> '."\n";
                            $fuente .=  '   </div> '."\n";
                            $i++;
                        }

                $fuente .=  '   <div class="form-group"> '."\n";
                $fuente .=  ' <div class="col-sm-offset-2 col-sm-10"> '."\n";
                $fuente .=  '       <button type="submit" class="btn btn-primary">Edit</button> '."\n";
                $fuente .=  '     </div> '."\n";
                $fuente .=  '   </div>     '."\n";
                $fuente .=  ' </form> '."\n";
                
                $fuente = "Robinso coello "; 
                
            return $fuente;
            break; 
        
case 'crear':   
    
    
            $fuente    = '<h2><?php echo _t("Nuevo '.$nombrePlugin.'"); ?></h2>';   
            $fuente   .=  '     <form class="form-horizontal" action="index.php" method="post"> '."\n";
            $fuente   .=  '     <form class="form-horizontal" action="index.php" method="post"> '."\n";
            $fuente   .=  '    <input type="hidden" name="accion" value="crear"> '."\n";
            $i=0;
                foreach($resultados as $reg ) {        
                            $fuente  .=  '     <div class="form-group"> '."\n";
                            $fuente  .=  '     <label for="'.$reg[0].'" class="col-sm-2 control-label">'.ucfirst($reg[0]).'</label> '."\n";
                            $fuente  .=  '     <div class="col-sm-10"> '."\n";
                            $fuente  .=  '       <input type="text" class="form-control" name="'.$reg[0].'" id="'.$reg[0].'" placeholder="'.  ucfirst($reg[0]).'"> '."\n";
                            $fuente  .=  '     </div> '."\n";
                            $fuente  .=  '   </div> '."\n\n\n";                    
                $i++;
            }
            $fuente  .=  ' <div class="form-group"> '."\n";
            $fuente  .=  '     <div class="col-sm-offset-2 col-sm-10"> '."\n";
            $fuente  .=  '       <button type="submit" class="btn btn-primary">Rgistrar</button> '."\n";
            $fuente  .=  '     </div> '."\n";
            $fuente  .=  '   </div> '."\n";
            $fuente  .=  ' </form> '."\n";


            
            
            return $fuente;
            break;
            
//*************************************************            
case 'editar':                
                $fuente  = '<h2><?php echo _t("Editar"); ?></h2>';   
                $fuente .=  '     <form class="form-horizontal" method="" action=""> '."\n";
                $fuente .=  '     <input type="hidden" name="accion" value="editar"> '."\n";                
                $fuente .=  '     <input type="hidden" name="id" value="<?php echo $id; ?>"> '."\n";
                        $i=0;
                        foreach($resultados as $reg ) {     
                            $fuente .=  ' <div class="form-group"> '."\n";
                            $fuente .=  '     <label for="'.$reg[0].'" class="col-sm-2 control-label">'.  ucfirst($reg[0]).'</label> '."\n";
                            $fuente .=  '     <div class="col-sm-10"> '."\n";
                            $fuente .=  '       <input type="text" class="form-control" name="'.$reg[0].'" id="'.$reg[0].'" placeholder="'.  ucfirst($reg[0]).'" value="<?php echo '.$reg[0].'; ?>"> '."\n";
                            $fuente .=  '     </div> '."\n";
                            $fuente .=  '   </div> '."\n\n\n";
                            $i++;
                        }

                $fuente .=  '   <div class="form-group"> '."\n";
                $fuente .=  ' <div class="col-sm-offset-2 col-sm-10"> '."\n";
                $fuente .=  '       <button type="submit" class="btn btn-primary">Edit</button> '."\n";
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
    foreach($resultados as $reg ) {     
    $fuente .=  ' <th><?php echo _t("'.  ucfirst($reg[0]).'"); ?></th> '."\n";
    
    $i++;
    }      
    $fuente .=  ' <th><?php echo _t("Accion"); ?></th> '."\n";
    $fuente .=' </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "'.$nombrePlugin.'", $u_grupo)){
                include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "'.$path_plugins.'/'.$nombrePlugin.'/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "'.$nombrePlugin.'", $u_grupo)){
                   // include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr.php";
                    include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr_editar.php";
                }else{
                    include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "'.$nombrePlugin.'", $u_grupo)){
                include "'.$path_plugins.'/'.$nombrePlugin.'/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


'; 
                                    
            return $fuente;
            break;  
            
            

//*******************************************************
            case 'tr':   

                
                
                
                
            $fuente   =  ' <?php  '."\n";                    
            $fuente .= '    echo \' <tr>';
                    $i=0;
                    foreach($resultados as $reg ) {     
                    $fuente .=  ' <td>\'.$'.$reg[0].'.\'</td> '."\n";
                    $i++;
                    }      
               $fuente .=' <td>
                    <a href=\'.$_SERVER[\'PHP_SELF\'].\'?p='.$nombrePlugin.'&c=ver&id=\'.$id.\'">Ver</a> |   
                    <a href="demo?p='.$nombrePlugin.'&c=editar&id=\'.$id.\'">Editar</a>    
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
                    foreach($resultados as $reg ) {     
                    $fuente .=  ' <td><input class="form-control" type="text" name="'.$reg[0].'" value="" placeholder="'.  ucfirst($reg[0]).'"></td> '."\n";
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
            foreach($resultados as $reg ) {     
            $fuente .=  ' <td><input class="form-control" type="text" name="'.$reg[0].'" value="<?php echo $'.$reg[0].'; ?>" placeholder="'.  ucfirst($reg[0]).'"></td> '."\n";
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
            foreach($resultados as $reg ) {     
            $fuente .=  ' <td><input class="form-control" type="text" name="'.$reg[0].'" value="" placeholder="'.ucfirst($reg[0]).'"></td> '."\n";
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
                $fuente .= '<h2>
                            <?php echo _t("Lista de '.$nombrePlugin.'"); ?>     
                            <a type="button" class="btn btn-primary navbar-btn" href="?p='.$nombrePlugin.'&c=crear">Nueva</a>
                            </h2>';   
                $fuente .=  '     <form class="form-horizontal" method="" action=""> '."\n";
                $fuente .=  '     <input type="hidden" name="accion" value="editar"> '."\n";                
                $fuente .=  '     <input type="hidden" name="id" value="<?php echo $id; ?>"> '."\n";
                        $i=0;
                        foreach($resultados as $reg ) {     
                            $fuente .=  ' <div class="form-group"> '."\n";
                            $fuente .=  '     <label for="'.$reg[0].'" class="col-sm-2 control-label">'.  ucfirst($reg[0]).'</label> '."\n";
                            $fuente .=  '     <div class="col-sm-10"> '."\n";
                            $fuente .=  '       <input type="text" class="form-control" name="'.$reg[0].'" id="'.$reg[0].'" placeholder="'.  ucfirst($reg[0]).'" value="<?php echo $'.$reg[0].'; ?>"> '."\n";
                            $fuente .=  '     </div> '."\n";
                            $fuente .=  '   </div> '."\n";
                            $fuente .=  '  '."\n\n";
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
                function '.$nombrePlugin.'_campo($f, $campo){
                    global $conexion; 
                $sql=mysql_query(
                        "SELECT $campo FROM '.$nombrePlugin.' id = \'$id\'   ",$conexion) or die ("Error:".mysql_error());
                $reg = mysql_fetch_array($sql);
                return $reg[$campo];    
                }'; 
            
            
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
    $c = ['borrar','buscar','crear','editar','index','tr','tr_anadir','tr_editar','tr_buscar','ver'] ;    
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

/**
 * Esta funcion sirbe para traducir las frases del sitio web
 * @param type $palabra
 * @return type
 */
function _t($palabra){
    return $palabra;
}


    
   
































