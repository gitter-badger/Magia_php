<?php 

function vceb($nombrePlugin,$mvcg){


    
    
     
//$fuente  = file_get_contents('./vista/c_index.php');
$fuente  = '<?php
include \'header.php\';
include "./plugins/'.$nombrePlugin.'/funciones.php";
$pagina = "'.$nombrePlugin.'";
if (permisos_tiene_permiso(\'ver\', \''.$nombrePlugin.'\', $u_grupo)) {
    include "./plugins/'.$nombrePlugin.'/modelos/index.php";
    include "./plugins/'.$nombrePlugin.'/vista/index.php";
} else {
    permisos_sin_permiso(\'ver\', \''.$nombrePlugin.'\', $u_id_usuario);
}
';
// para llenar el document de vacio
$fuente = ""; 

// estos se cran por defecto enla raiz del pluging

       $c = ['funciones.php','readme.txt','COPYING','.gitignore','version','menu'] ;
       $total = count($c);
       $i=0;
        while ($i<$total) {        
         $destino = './plugins/'.$nombrePlugin.'/'.$c[$i].''; 
        $fp = fopen($destino, 'w');
        fwrite($fp, $fuente);        
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
        $fp = fopen($destino, 'w');
        fwrite($fp, $fuente);        
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
        $fp = fopen($destino, 'w');
        fwrite($fp, $fuente);        
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
        $fp = fopen($destino, 'w');
        fwrite($fp, $fuente);        
        fclose($fp);
        $i++;  
        }
        break;
        
case 'reg':
        $i=0;
        while ($i<1) {
        $c = ['reg'] ;
         $destino = './plugins/'.$nombrePlugin.'/'.$mvcg.'/'.$c[$i].'.php'; 
        $fp = fopen($destino, 'w');
        fwrite($fp, $fuente);        
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
        $fp = fopen($destino, 'w');
        fwrite($fp, $fuente);        
        fclose($fp);
        $i++;  
        }
        break;
        
    default:
        
        break;
}


    
    


    
}    
    
   





if(isset($_GET['nombre'])){
    $nombrePlugin = trim (strtolower($_GET['nombre']));
}else {
   $nombrePlugin = false; 
}

if($nombrePlugin){
    $mvc =['controlador','modelos','reg','vista']; 
    
    mkdir('./plugins/'.$nombrePlugin.'');
    $i=0;
    while ($i<4){
        mkdir('./plugins/'.$nombrePlugin.'/'.$mvc[$i].'');
        
        vceb($nombrePlugin, $mvc[$i]);
        
        $i++;
    }
    
    
    


}


?>

<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>




<h1>Plugins Instalados</h1>

<a href="index.php?p=plugins_instalados">Instalados</a> | Buscar | <a href="index.php?p=plugin">Crear</a>
<hr>


<?php 
$nombre = "robinson"; 
?>


<form class="form-inline" action="?" method="">
    <input type="hidden" name="p" value="plugin">
    
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Nombre del plugin</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
  </div>
  <button type="submit" class="btn btn-primary">Crear plugin</button>
</form>


<p>El nombre del plugin debe conicidir con el nombre de la tabla de la base de datos que desea administrar</p>








<?php 
/*

<table class="table table-striped">
    
    <tbody>
        <!-- Controlador-->
        <tr>
            <td colspan="4" > <span class="glyphicon glyphicon-folder-open"></span> Controlador</td>

            
        </tr>
        
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> Ver</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/controlador/ver.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> crear</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/controlador/crear.php</td>
            <td>
                <span class="glyphicon glyphicon-ban-circle"></span> existe
                <span class="glyphicon glyphicon-trash"></span> borrar
            </td>
            
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> editar</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/controlador/editar.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> borrar</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/controlador/borrar.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> buscar</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/controlador/buscar.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> index</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/controlador/index.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        
        <!-- Modelos-->
        <tr>
            <td colspan="4"><span class="glyphicon glyphicon-folder-open"></span> Modelos</td>

            
        </tr>
        
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> Ver</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/modelos/ver.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> crear</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/modelos/crear.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> editar</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/modelos/editar.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> borrar</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/modelos/borrar.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> buscar</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/modelos/buscar.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> index</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/modelos/index.php</td>            
        </tr>
        
        <!-- Vista-->
        <tr>
            <td colspan="4"><span class="glyphicon glyphicon-folder-open"></span> Vista</td>

            
        </tr>
        
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> Ver</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/vista/ver.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> crear</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/vista/crear.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> editar</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/modelos/editar.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> borrar</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/vista/borrar.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> buscar</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/vista/buscar.php</td>
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        <tr>
            <td></td>
            <td><span class="glyphicon glyphicon-save-file"></span> index</td>
            <td>./plugins/<b><?php echo $nombre; ?></b>/vista/index.php</td>            
        </tr>
        
        <tr>
                        
            <td><span class="glyphicon glyphicon-save-file"></span> funciones</td>          
           <td></td>
           <td>./plugins/<b><?php echo $nombre; ?></b>/funciones.php</td> 
            <td><span class="glyphicon glyphicon-ok-circle"></span> ok</td>
        </tr>
        
        
        
        
      
    </tbody>
</table>

*/
?>

<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>