

<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/vista/index.php
</h1>


<textarea class="form-control" rows="20">
<h4>
    &lt;?php echo _t('Lista de <?php echo $tabla; ?>'); ?> 
    [<a href="index.php?p=<?php echo $tabla; ?>&c=crear">
        &lt;?php echo _t('Anadir nuevo'); ?>
    </a>]
</h4>	

<table class="table table-striped">
    <thead>
        <tr> 
            <?php 
            foreach($resultado as $reg ) {
                include "./reg/reg.php";
                echo '<th>&lt;?php echo _t("'.$mayusculas_pri_let_de_frase.'"); ?></th>';
                
                echo '
                ';
            }
            ?>  
            <th>&lt;?php echo _t('Accion'); ?></th>
        </tr>
    </thead>

    <tbody>
        &lt;?php
        while ($reg = mysql_fetch_array($sql)) {
            include "./plugins/<?php echo $tabla; ?>/reg/reg.php";
            include "./plugins/<?php echo $tabla; ?>/vista/tr.php";
        }
        ?>
    </tbody>
</table> 


</textarea>


<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>


