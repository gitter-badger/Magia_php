<h4>
    <?php echo _t("Lista de contribuciones"); ?>     
</h4>	

<table class="table table-striped">
    <thead>
        <tr>  <th><?php echo _t("id"); ?></th> 
 <th><?php echo _t("funcion"); ?></th> 
 <th><?php echo _t("id_usuario"); ?></th> 
 <th><?php echo _t("contribucion"); ?></th> 
 <th><?php echo _t("fecha"); ?></th> 
 <th><?php echo _t("estatus"); ?></th> 
 </tr>
    </thead>
    <tbody>
        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "magia_plugins/contribuciones/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "contribuciones", $u_grupo)){
                    include "magia_plugins/contribuciones/vista/tr_editar.php";
                }else{
                    include "magia_plugins/contribuciones/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "contribuciones", $u_grupo)){
                include "magia_plugins/contribuciones/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


