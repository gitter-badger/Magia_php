<div class="row">
    <div class="col-lg-6">
        <img src="imagenes/logo.png" alt=""/>
        
    </div>
    <div class="col-lg-6">
       
        
<?php 
/*            <form class="form-inline">
              <div class="form-group">
                  <label for="login" class="sr-only">Login</label>
                <input type="text" class="form-control" id="login" placeholder="Login">
              </div>
              <div class="form-group">
                <label for="clave" class="sr-only">Clave</label>
                <input type="password" class="form-control" id="clave" placeholder="clave">
              </div>
              <button type="submit" class="btn btn-default">Entrar</button>
            </form>*/
?>
        
        
        
    </div>
</div>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="index.php">Magia Formularios</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
          <li class="active"><a href="index.php">Index <span class="sr-only">(current)</span></a></li>
          <li><a href="index.php?p=plugins_lista">Gestion</a></li>
          
        

          
        
        
        <li class="dropdown">
          <a 
              href="#" 
              class="dropdown-toggle" 
              data-toggle="dropdown" 
              role="button" 
              aria-haspopup="true" 
              aria-expanded="false">
              Plugins 
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
              
              <?php 
              
              
              $lista_plugins = scandir($path_magia_plugins);
                $plugins = [];

                foreach ($lista_plugins as $key => $value) {

                    if($value !='.'){
                        array_push($plugins, $value);
                    }
                }              
              $total_plugins = count($plugins);
              for($i = 0; $i <$total_plugins; $i++){
                  echo '<li> <a href="gestion.php?p='.$plugins[$i].'&c=index"><span class="glyphicon glyphicon-th-list"></span> '.ucwords($plugins[$i]).'</a></li>'; 
              }
              ?>
              
            <li role="separator" class="divider"></li>
            <li><a href="index.php?p=plugins_lista">Crear plugin</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
            
          </ul>
        </li>
      </ul>
        
        

        
        
     
        
        
        
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<ol class="breadcrumb">
  <li><a href="./">Inicio</a></li>
  <li><a href="index.php">Magia</a></li> 
</ol>




