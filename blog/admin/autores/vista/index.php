<h2>
                        <?php echo _t("Lista de autores"); ?>     
                        <a type="button" class="btn btn-primary navbar-btn" href="?p=autores&c=crear">Nueva</a>
                        </h2>
<table class="table table-striped">
    <thead>
        <tr>  <th><?php echo _t("Id"); ?></th> 
 <th><?php echo _t("Nombre"); ?></th> 
 <th><?php echo _t("Apellidos"); ?></th> 
 <th><?php echo _t("Email"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "autores", $u_grupo)){
                include "../admin/autores/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "../admin/autores/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "autores", $u_grupo)){
                    include "../admin/autores/vista/tr.php";
                   // include "../admin/autores/vista/tr_editar.php";
                }else{
                    include "../admin/autores/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "autores", $u_grupo)){
                include "../admin/autores/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


