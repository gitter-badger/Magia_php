<h4>
    <?php echo _t("Lista de cambios"); ?>     
</h4>	

<table class="table table-striped">
    <thead>
        <tr>
            <th><?php echo _t("id"); ?></th> 
            <th><?php echo _t("funcion"); ?></th> 
            <th><?php echo _t("version"); ?></th> 
            <th><?php echo _t("descripcion"); ?></th> 
        </tr>
    </thead>
    <tbody>
        <?php
        while ($reg = mysql_fetch_array($sql)) {
            include "magia_plugins/cambios/reg/reg.php";
            if (permisos_tiene_permiso("editar", "cambios", $u_grupo)) {
                include "magia_plugins/cambios/vista/tr.php";
            } else {
                include "magia_plugins/cambios/vista/tr.php";
            }
        }
        ?>
    </tbody>
    <?php
    if (permisos_tiene_permiso("crear", "cambios", $u_grupo)) {
        include "magia_plugins/cambios/vista/tr_anadir.php";
    }
    ?>


</table> 


