<h1>Extructura</h1>



<?php
echo "La carpeta donde se instalar los plugins (path_instalacion_plugins) es: ";
echo "$path_instalacion_plugins";
echo "<br>";
echo "La carpeta donde se instalara los archivos de gestion (path_plugins) es: ";
echo "$path_plugins";
echo "<br>";


echo "Esto es donde se hara la configuracion del sistema (path_config) es: ";
echo "$path_config";
echo "<br>";
echo "La carpeta donde se instalar los controladores es: ";
echo "$path_plugins_controlador";
echo "<br>";
echo "La carpeta donde se instalar los modelos es: ";
echo "$path_plugins_modelos";
echo "<br>";
echo "La carpeta donde se instalar las vistas es: ";
echo "$path_plugins_vista";

echo "<br>";
echo "La carpeta donde se instalar los registros es: ";
echo "$path_plugins_reg";
?>

<hr>

<form class="form-horizontal" action="" method="get">
    <input type="hidden" name="a" value="config">


    <div class="form-group">
        <label for="path_magia_plugins" class="col-sm-2 control-label">Path de instalacion plugins</label>
        <div class="col-sm-10">
            <input type="text" 
                   name="path_instalacion_plugins" 
                   class="form-control" 
                   id="path_instalacion_plugins" 
                   placeholder="path_instalacion_plugins" 
                   value="<?php echo "$path_instalacion_plugins"; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="path_magia_plugins" class="col-sm-2 control-label">Path plugins</label>
        <div class="col-sm-10">
            <input type="text" 
                   name="path_plugins" 
                   class="form-control" 
                   id="path_plugins" 
                   placeholder="path_plugins" 
                   value="<?php echo "$path_plugins"; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="path_magia_config" class="col-sm-2 control-label">Path config</label>
        <div class="col-sm-10">
            <input type="text" 
                   name="path_config" 
                   class="form-control" 
                   id="path_config" 
                   placeholder="path_config" 
                   value="<?php echo "$path_config"; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="path_magia_plugins" class="col-sm-2 control-label">Path Controlador</label>
        <div class="col-sm-10">
            <input type="text" 
                   name="path_plugins_controlador" 
                   class="form-control" 
                   id="path_plugins_controlador" 
                   placeholder="path_plugins_controlador" 
                   value="<?php echo "path_plugins_controlador"; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="path_magia_plugins" class="col-sm-2 control-label">Path Modelos</label>
        <div class="col-sm-10">
            <input type="text" 
                   name="path_plugins_modelos" 
                   class="form-control" 
                   id="path_plugins_modelos" 
                   placeholder="path_plugins_modelos" 
                   value="<?php echo "$path_plugins_modelos"; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="path_magia_plugins" class="col-sm-2 control-label">Path vista</label>
        <div class="col-sm-10">
            <input type="text" 
                   name="path_plugins_vista" 
                   class="form-control" 
                   id="path_plugins_vista" 
                   placeholder="path_plugins_vista" 
                   value="<?php echo "$path_plugins_vista"; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="path_magia_plugins" class="col-sm-2 control-label">Path reg</label>
        <div class="col-sm-10">
            <input type="text" 
                   name="path_plugins_reg" 
                   class="form-control" 
                   id="path_plugins_reg" 
                   placeholder="path_plugins_reg" 
                   value="<?php echo "$path_plugins_reg"; ?>">
        </div>
    </div>





    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Editar</button>
        </div>
    </div>


</form>