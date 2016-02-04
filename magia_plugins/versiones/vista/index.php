<h4>
    <?php echo _t("Lista de versiones"); ?>     
</h4>	

<table class="table table-striped">
    <thead>
        <tr>  <th><?php echo _t("id"); ?></th> 
 <th><?php echo _t("version"); ?></th> 
 <th><?php echo _t("nombre"); ?></th> 
 </tr>
    </thead>
    <tbody>
        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "magia_plugins/versiones/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "versiones", $u_grupo)){
                    include "magia_plugins/versiones/vista/tr_editar.php";
                }else{
                    include "magia_plugins/versiones/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "versiones", $u_grupo)){
                include "magia_plugins/versiones/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


