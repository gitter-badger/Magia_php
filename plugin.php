<?php 

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
        $i++;
    }
    
    
    
    
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
    
    




$c = ['index','ver','crear','editar','borrar','buscar','detalles'] ;       
                


$i=0;
while ($i<7) {
    $destino = './plugins/'.$nombrePlugin.'/controlador/'.$c[$i].'.php'; 
    $fp = fopen($destino, 'w');
    fwrite($fp, $fuente);
    //fwrite($fp, '23');
    fclose($fp);
    $i++;
}









}


?>


<h1>Crear un pluging</h1>


<?php 
$nombre = "robinson"; 
?>


<form class="form-inline" action="?" method="">
    <input type="hidden" name="p" value="plugin">
    
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Nombre del plugin</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
  </div>
  <button type="submit" class="btn btn-primary">Buscar tabla</button>
</form>













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

<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>