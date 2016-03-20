


﻿ <div class="col-sm-3 col-md-2 sidebar">
 
        <ul class="nav nav-sidebar">
            
            <?php 
            magia_menu($p);
            ?>
            
<!--             
            <?php if (permisos_tiene_permiso("ver", "bienes", $u_grupo) == true) { ?>              

                <li <?php if ($p == "bienes") { echo " class=\"active\" ";} ?> >

                    <a href="?p=bienes&c=bienes"><span class="glyphicon glyphicon-home"> 
                            <span class="sr-only">(current)</span></span> 
                            <?php _t("Bienes"); ?>
                        <span class="badge"><?php
                        //echo "$total_propiedades";
                        ?></span>
                    </a>
                </li>
            <?php } ?>
            
            

             
            
            
            <?php if(permisos_tiene_permiso("ver", "agenda", $u_grupo)==true){ ?>            
            <li <?php if($p == "agenda" ) {echo " class=\"active\" ";} ?> >
            <a href="?p=agenda&c=agendaDiario&fecha=<?php echo date("Y-m-d");?>">
                <span class="glyphicon glyphicon-calendar"></span> 
                    <?php _t("Agenda"); ?>
            </a>
            </li>
            <?php } ?>          
			
            
            <?php if(permisos_tiene_permiso("ver", "maillistxxxxx", $u_grupo)==true){ ?>  
            <li <?php if($p == "maillist" ) {echo " class=\"active\" ";} ?>>
                <a href="?p=maillist&c=maillist">
                    <span class="glyphicon glyphicon-bell"></span> 
                        <?php  _t("Maillist"); ?></a>
            </li> 
            <?php } ?>  
            
            
            <?php if(permisos_tiene_permiso("ver", "mensajes", $u_grupo)==true){ ?>
                    <li <?php if($p == "mensajes" ) {echo " class=\"active\" ";} ?>>
                        <a href="?p=mensajes&c=index">
                            <span class="glyphicon glyphicon-envelope"></span> 
                                <?php _t("Mensajes"); ?>
                        </a>
                    </li>                
             <?php } ?>        
        
        
        
        
        
        
        
            <?php if(permisos_tiene_permiso("ver", "contactos", $u_grupo)==true){ ?>        
                <li <?php if($p == "contactos" ) {echo " class=\"active\" ";} ?>>
			<a href="?p=contactos&c=contactos">
                            <span class="glyphicon glyphicon-user"></span> 
                                <?php _t("Mis contactos"); ?>
                        </a>
                </li>
            <?php } ?>
            
            
            
            
            
            <?php if(permisos_tiene_permiso("ver", "interesados", $u_grupo)==true){ ?>            
            <li <?php if($p == "interesados" ) {echo " class=\"active\" ";} ?>>
                <a href="?p=interesados&c=interesados">
                    <span class="glyphicon glyphicon-magnet"></span> 
                        <?php _t("Interesados"); ?>
                </a>
            </li>
            <?php } ?>

           
            
            
            <?php if(permisos_tiene_permiso("ver", "personales", $u_grupo)==true){ ?>
             <li <?php if($p == "personal" ) {echo " class=\"active\" ";} ?>>
                 <a href="?p=personal&c=index">
                     <span class="glyphicon glyphicon-briefcase"></span> 
                         <?php _t("Personal"); ?>
                 </a>
            </li> 
            <?php } ?>
            

            
            
            
            
            <?php if(permisos_tiene_permiso("ver", "misdatos", $u_grupo)==true){ ?>            
             <li <?php if($p == "misdatos" ) {echo " class=\"active\" ";} ?>>
                 <a href="?p=misdatos">
                     <span class="glyphicon glyphicon-cog"></span> 
                         <?php _t("Mi datos"); ?>
                 </a>
            </li>  
            <?php } ?>
            
            
            
            
             <li>
                 <a href="http://inmoweb.ec/" target="new">
                     <span class="glyphicon glyphicon-heart"></span> 
                     Inmoweb.ec
                 </a>
            </li>              
            
-->
            
            
<?php 
/*            <li
			<?php if($p == "personales" ) {echo " class=\"active\" ";} ?>
			><a href="?p=personales"><i class="icon-suitcase"></i> Personal</a></li>
			<li><a href="?p=empresas"><i class="icon-hospital"></i> Agencias</a></li>
			<li><a href="?p=oficinas"><i class="icon-hospital"></i> Oficinas</a></li>
			<li><a href="oficinas.php"><i class="icon-hospital"></i> Oficinas</a></li>
			<li><a href="oficinas.php"><i class="icon-hospital"></i> Oficinas</a></li>
			<li><a href="cantones.php"><i class="icon-hdospital"></i> Ciuddes</a></li>
			<li><a href="sub_tipo_su_servicios.php"><i class="icon-hdospital"></i> sub_tipo_su_servicios</a></li>
			<li><a href="servicios.php"><i class="icon-hdospital"></i> servicios</a></li>
			<li><a href="?p=config_sub_servicios"><i class="icon-hdospital"></i> sub_servicios</a></li>
        
*/
?>
                        
</ul>
       


    
    
    
		  
</div> 							
