<h1><?php echo $tabla; ?></h1>


    <ul>
        <li><b>C</b>ontrolador</li>
        <ul>
            <li><a href="magia.php?p=c_index&tabla=<?php echo "$tabla"; ?>">index.php</a></li>
            <li><a href="magia.php?p=c_ver&tabla=<?php echo "$tabla"; ?>">ver.php</a></li>                                        
            <li><a href="magia.php?p=c_crear&tabla=<?php echo "$tabla"; ?>">crear.php</a></li>                                        
            <li><a href="magia.php?p=c_editar&tabla=<?php echo "$tabla"; ?>">editar.php</a></li>                                        
            <li><a href="magia.php?p=c_borrar&tabla=<?php echo "$tabla"; ?>">borrar.php</a></li>                                        
            <li><a href="magia.php?p=c_buscar&tabla=<?php echo "$tabla"; ?>">buscar.php</a></li>                                        
                                                   
                                                
        </ul>
        <li><b>M</b>odelos</li>
        <ul>
            <li><a href="magia.php?p=m_index&tabla=<?php echo "$tabla"; ?>">index.php</a></li>
            <li><a href="magia.php?p=m_ver&tabla=<?php echo "$tabla"; ?>">ver.php</a></li>
            <li><a href="magia.php?p=m_buscar&tabla=<?php echo "$tabla"; ?>">buscar.php</a></li>
        </ul>                                
        <li><b>V</b>ista</li>
        <ul>                                        
            <li><a href="magia.php?p=v_index&tabla=<?php echo "$tabla"; ?>">index.php</a></li>
            <li><a href="magia.php?p=v_index&tabla=<?php echo "$tabla"; ?>">ver.php</a></li>
            <li><a href="magia.php?p=v_crear&tabla=<?php echo "$tabla"; ?>">crear.php </a></li>
            <li><a href="magia.php?p=v_editar&tabla=<?php echo "$tabla"; ?>">editar.php </a></li>           
            <li><a href="magia.php?p=v_editar&tabla=<?php echo "$tabla"; ?>">borrar.php </a></li>  
            <li><a href="magia.php?p=v_editar&tabla=<?php echo "$tabla"; ?>">buscar.php </a></li>  
            <li><a href="magia.php?p=v_detalles&tabla=<?php echo "$tabla"; ?>">detalles.php </a></li>
            <li><a href="magia.php?p=v_detalles1&tabla=<?php echo "$tabla"; ?>">detalles1.php </a></li>
            <li><a href="magia.php?p=v_borrar&tabla=<?php echo "$tabla"; ?>">Boton borrar </a></li>
            <li><a href="magia.php?p=v_tr&tabla=<?php echo "$tabla"; ?>">tr </a></li>
            <li><a href="magia.php?p=v_tr_anadir&tabla=<?php echo "$tabla"; ?>">tr_anadir </a></li>
            <li><a href="magia.php?p=v_tr_editar&tabla=<?php echo "$tabla"; ?>">tr_editar </a></li>

        </ul>                                
        <li>registros</li>
        <ul>                                        
            <li><a href="magia.php?p=r_registros&tabla=<?php echo "$tabla"; ?>">reg.php</a></li>
        </ul>                                
        <li>Datos</li>
        <ul>                                        
            <li><a href="magia.php?p=d_get&tabla=<?php echo "$tabla"; ?>">GET</a></li>
            <li><a href="magia.php?p=d_post&tabla=<?php echo "$tabla"; ?>">POST</a></li>
            <li><a href="magia.php?p=d_request&tabla=<?php echo "$tabla"; ?>">REQUEST</a></li>
        </ul>                                
    </ul>



