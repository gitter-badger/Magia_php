<h4>
    <?php echo _t('Lista de grupos'); ?> 
</h4>	


<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>


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
                if(permisos_tiene_permiso('editar', 'grupos', $u_grupo) and
                            (
                            $grupo !='administradores' &&
                            $grupo !='usuarios' &&
                            $grupo !='visitantes' 
                            )
                        ){
                    include "./plugins/grupos/vista/tr_editar.php";
                }else{
                    include "./plugins/grupos/vista/tr.php";
                }            
        }
        ?>
    </tbody>
    
   <?php 
   if(permisos_tiene_permiso('crear', 'grupos', $u_grupo)){
                include "./plugins/grupos/vista/tr_add.php";
            }
   ?>
    
</table> 


