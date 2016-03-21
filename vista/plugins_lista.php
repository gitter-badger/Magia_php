<p>Lista de tablas en la base de datos <b><?php echo "$bdatos"; ?></b>: 
    <a href="index.php?p=plugins_lista"><span class="glyphicon glyphicon-refresh"></span></a>
</p>

<div class="table-responsive"> 		  
    <table class="table table-striped table-hover" width="100%">
        <thead>
            <tr>
                <th> #</th>
                <th> Table</th>

                <th> Camino de instalacion</th>
                <th> Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($resultado as $reg) {

                if (
                        file_exists($path_plugins . '/' . $reg[0]) 
                ) {
                    echo '<tr>        
        <td>' . $i . '</td>
        <td>' . $reg[0] . '</td>
        <td>Creado</td>
        
        <td>
        <a href="index.php?tabla=' . $reg[0] . '&p=c_index">Codigos</a> | <a href="gestion.php?p=' . $reg[0] . '&c=index">Gestion</a>
         </td>                
    </tr>';
                } else {
                    echo '<tr>        
        <td>' . $i . '</td>
        <td><b>' . $reg[0] . '</b></td>
        
        <td>' . $path_plugins . '/' . $reg[0] . '</td>
        <td><a href="index.php?p=plugins_crear&nombrePlugin=' . $reg[0] . '">Crear plugin</a></td>
        
        
    </tr>';
                }
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>
