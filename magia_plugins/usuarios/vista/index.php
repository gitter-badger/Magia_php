<h4>
    <?php echo _t("Lista de usuarios"); ?>     
</h4>	

<table class="table table-striped">
    <thead>
        <tr>  <th><?php echo _t("id_usuario"); ?></th> 
 <th><?php echo _t("nombres"); ?></th> 
 <th><?php echo _t("email"); ?></th> 
 <th><?php echo _t("estatus"); ?></th> 
 </tr>
    </thead>
    <tbody>
        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "magia_plugins/usuarios/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "usuarios", $u_grupo)){
                    include "magia_plugins/usuarios/vista/tr_editar.php";
                }else{
                    include "magia_plugins/usuarios/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "usuarios", $u_grupo)){
                include "magia_plugins/usuarios/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

