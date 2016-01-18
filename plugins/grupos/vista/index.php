<h4>
    <?php echo _t('Lista de grupos'); ?>     
</h4>	

<table class="table table-striped">
    <thead>
        <tr> 
            <th><?php echo _t("Id grupo"); ?></th>
                <th><?php echo _t("Grupo"); ?></th>
                  
            <th><?php echo _t('Accion'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "./plugins/grupos/reg/reg.php";
                if(permisos_tiene_permiso('editar', 'grupos', $u_grupo)){
                    include "./plugins/grupos/vista/tr_editar.php";
                }else{
                    include "./plugins/grupos/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso('crear', 'grupos', $u_grupo)){
                include "./plugins/grupos/vista/tr_anadir.php";
            }
   ?>
    
    
</table> 


