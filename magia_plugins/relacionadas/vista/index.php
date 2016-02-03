<h4>
    <?php echo _t("Lista de relacionadas"); ?>     
</h4>	

<table class="table table-striped">
    <thead>
        <tr>  <th><?php echo _t("id"); ?></th> 
 <th><?php echo _t("funcion"); ?></th> 
 <th><?php echo _t("funcion_relacionada"); ?></th> 
 </tr>
    </thead>
    <tbody>
        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "magia_plugins/relacionadas/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "relacionadas", $u_grupo)){
                    include "magia_plugins/relacionadas/vista/tr_editar.php";
                }else{
                    include "magia_plugins/relacionadas/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "relacionadas", $u_grupo)){
                include "magia_plugins/relacionadas/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


