<h4>
    <?php echo _t("Lista de parametros"); ?>     
</h4>	

<table class="table table-striped">
    <thead>
        <tr>  <th><?php echo _t("id"); ?></th> 
 <th><?php echo _t("funcion"); ?></th> 
 <th><?php echo _t("parametro"); ?></th> 
 <th><?php echo _t("descripcion"); ?></th> 
 </tr>
    </thead>
    <tbody>
        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "magia_plugins/parametros/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "parametros", $u_grupo)){
                    include "magia_plugins/parametros/vista/tr_editar.php";
                }else{
                    include "magia_plugins/parametros/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "parametros", $u_grupo)){
                include "magia_plugins/parametros/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


