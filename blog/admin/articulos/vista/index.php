<h2>
                        <?php echo _t("Lista de articulos"); ?>     
                        <a type="button" class="btn btn-primary navbar-btn" href="?p=articulos&c=crear">Nueva</a>
                        </h2>
<table class="table table-striped">
    <thead>
        <tr>  <th><?php echo _t("Id"); ?></th> 
 <th><?php echo _t("Titulo"); ?></th> 
 <th><?php echo _t("Contenido"); ?></th> 
 <th><?php echo _t("Id_autor"); ?></th> 
 <th><?php echo _t("Fecha"); ?></th> 
 <th><?php echo _t("Estatus"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "articulos", $u_grupo)){
                include "../admin/articulos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "../admin/articulos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "articulos", $u_grupo)){
                    include "../admin/articulos/vista/tr.php";
                   // include "../admin/articulos/vista/tr_editar.php";
                }else{
                    include "../admin/articulos/vista/tr.php";
                }            
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "articulos", $u_grupo)){
                include "../admin/articulos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


