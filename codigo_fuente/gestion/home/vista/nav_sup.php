<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
            <span class="glyphicon glyphicon-th-large"></span>
            
            
            <a class="navbar-brand" href="index.php">
            <span class="glyphicon glyphicon-th-large"></span>
                <?php echo $config_nombre_web;?>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> <?php _t("Inicio"); ?></a></li>
            <li><a href="index.php?p=config&c=index"><span class="glyphicon glyphicon-wrench"></span> <?php _t("Parametros"); ?></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> 
            Robinson 
                <?php 
              
               echo ' ['.$u_grupo. '] ';
            ?> </a></li>
            
            <?php 
            if(permisos_tiene_permiso("verververver","config",$u_grupo)==true){
                echo "<li><a href=\"?p=config\"><span class=\"glyphicon glyphicon-lamdp\"></span>";_t("Manager"); echo "</a></li>";                
            }
            ?>
            <li><a href="?p=ayuda"><span class="glyphicon glyphicon-lamp"></span> <?php _t("Ayuda"); ?></a></li>
            <li><a href="z_logout.php"><span class="glyphicon glyphicon-off"></span> <?php _t("Desconectarse"); ?></a></li>
          </ul>
        </div>
      </div>
</nav>