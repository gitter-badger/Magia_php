<h4>
    <?php echo _t("Lista de extructura"); ?>     
</h4>	

<table class="table table-striped">
    <thead>
        <tr>  <th><?php echo _t("id"); ?></th> 
 <th><?php echo _t("funcion"); ?></th> 
 <th><?php echo _t("descripcion"); ?></th> 
 <th><?php echo _t("valor_entrega"); ?></th> 
 <th><?php echo _t("errores"); ?></th> 
 </tr>
    </thead>
    <tbody>
        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "magia_plugins/extructura/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "extructura", $u_grupo)){
                    include "magia_plugins/extructura/vista/tr_editar.php";
                }else{
                    include "magia_plugins/extructura/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "extructura", $u_grupo)){
                include "magia_plugins/extructura/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


