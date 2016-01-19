<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Instalados</a></li>
  <li role="presentation"><a href="#">Buscar</a></li>
  <li role="presentation"><a href="index.php?p=plugins&c=crear">Crear</a></li>
</ul>

<h2>plugins instalados</h2>

<table class="table table-striped">
    <thead>
        <tr> 
            <th><?php echo _t("#"); ?></th>
                <th><?php echo _t("Nombre"); ?></th>
                <th><?php echo _t("Version"); ?></th>
                <th><?php echo _t("Descripcion"); ?></th>
                <th><?php echo _t("compatible"); ?></th>                  
            <th><?php echo _t('Accion'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td><?php echo plugins_info('nombre'); ?></td>
            <td><?php echo plugins_info('version'); ?></td>
            <td><?php 
            echo 'Esta es la descripcoon '; 
            echo '<a href="'.  plugins_info('autor_email').'">'.  plugins_info('autor').'<a>'; 
            
            ?></td>
            <td><?php echo plugins_info('compatible'); ?></td>

        </tr>
        
        
    </tbody>
    
    
</table> 


