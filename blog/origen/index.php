<?php 
$u_grupo = "admin";
include 'bd.php';
include 'conec.php';
include 'coneccion.php';
include 'funciones.php';
include 'permisos.php';
incluir_funciones();
?>
<?php
    $p = (isset($_REQUEST['p']))?  $_REQUEST['p']  : "admin" ; 
    $c = (isset($_REQUEST['c']))?  $_REQUEST['c']  : "index" ; 
    
//include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="MagiaPHP">
    <link rel="icon" href="../../favicon.ico">
    <title>Admin</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="starter-template.css" rel="stylesheet">
    <link href="modelo.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" 
                    class="navbar-toggle collapsed" 
                    data-toggle="collapse" 
                    data-target="#navbar" 
                    aria-expanded="false" 
                    aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">MagiaPHP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">                                       
                <?php
                magia_menu($p);
                ?>
            </ul>
        </div>
    </div>
</nav>
      
      
<div class="container">  
<div class="row">
    <div class="col-lg-12">
        <hr>
        
      <?php
      // esto muestra mensajes si lo hay
      /*
      $lista_sms = ['Hola'];
      
      array_push($lista_sms, $sms);
      
      
      
      foreach ($lista_sms as $mensaje) {
          echo "<div class=\"alert alert-success\" role=\"alert\">$mensaje</div>"; 
      }
      
      */
      

      
      
      
      
      ?>  
        
        
        
        
        
        
        
        
        
        
    <?php
  /*  echo "<pre>"; 
    echo var_dump(magia_menu("./"));    
    echo "</pre>";
   * 
   */
   
    $url = "./$p/controlador/";
    $url .= "$c";
    $url .= ".php";       
    include "$url";      
    ?>
    </div>
</div>
    </div><!-- /.container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
