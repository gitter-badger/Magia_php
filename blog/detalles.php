<?php 
include "header.php"; 
/**
 * $web_slogan
 * $articulo_titulo
 * $articulo_autor
 * $articulo_fecha
 * $articulo_contenido
 */

$articulo_titulo = "Titulo del articulo";
?>

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title">The Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

        <div class="row"><hr>

        <div class="col-sm-8 blog-main">

            <?php 
           // include "post.php"; 
            ?>
            
            
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $articulo_titulo; ?></h2>
            <p class="blog-post-meta">$articulo_fecha by <a href="#">$articulo_autor</a></p>

            <p>$articulo_contenido</p>
            <hr>
          </div><!-- /.blog-post -->
            

          
            
            
            
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