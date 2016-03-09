<?php 
include "header.php"; 
?>

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title">The MagiaPHP Blog</h1>
        <p class="lead blog-description">The official Blog template of creating a blog with Bootstrap.</p>
      </div>

        <div class="row"><hr>

        <div class="col-sm-8 blog-main">

            <?php 

            // verifico que existe
            // copio e, carpeta temporal
            // lo muevo al lugar de plugins
            // descomprimo en lugar previsto
            // 
            
           // copy("http://latinos.be/demo.zip", "demo.zip");
            /*
            if(!@copy('http://latinos.be/demo.zip','./demo.zip'))
            {
                $errors= error_get_last();
                echo "COPY ERROR: ".$errors['type'];
                echo "<br />\n".$errors['message'];
            } else {
                echo "File copied from remote!";
            }
             * 
             */
            
            
            
            
            
            
            
            
            
            
            //include "./admin/articulos/modelos/index.php";
            for($i=0;$i<5; $i++){
               include "post.php";
            //include "./admin/articulos/vista/index.php";
            }
            





            
             
            ?>
          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            
            <?php include "der.php"; ?>
            
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->


<?php 
include "footer.php"; 
?>    