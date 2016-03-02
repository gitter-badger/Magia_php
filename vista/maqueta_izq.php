<hr>
Tabla: Usuarios
<?php
$campos = ["id","nombres","apellidos","login","clave","estatus"];
        $t = count($campos);
?>


<ul>
    
    <?php 
    $i=0;
    while ($i < $t){
        echo "<li><a href=\"?p=maqueta&campo=$campos[$i]\">$campos[$i] - xxxx</a></li>";
        $i++;
    }
    ?>
</ul>

Ver el formulario

