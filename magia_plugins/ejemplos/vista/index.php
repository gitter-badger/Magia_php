<h4>
    <?php echo _t("Lista de ejemplos"); ?>     
</h4>	

<table class="table table-striped">
    <thead>
        <tr>  <th><?php echo _t("id"); ?></th> 
 <th><?php echo _t("funcion"); ?></th> 
 <th><?php echo _t("ejemplo"); ?></th> 
 </tr>
    </thead>
    <tbody>
        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "magia_plugins/ejemplos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "ejemplos", $u_grupo)){
                    include "magia_plugins/ejemplos/vista/tr_editar.php";
                }else{
                    include "magia_plugins/ejemplos/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "ejemplos", $u_grupo)){
                include "magia_plugins/ejemplos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


