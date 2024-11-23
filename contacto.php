

<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>contacto</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader"> 
    <div class="preloader-inner"> <span class="dot"></span> 
    <div class="dots"> 
      <span></span> 
      <span></span> 
      <span></span> 
    </div> 
  </div> 
</div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                    <h4><em>LIBRERIA WEB</em></h4>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->

                    <!-- ***** Search End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="libros.php">Libros</a></li>
                        <li><a href="autores.php">Autores</a></li>
                        <li><a href="contacto.php" class="active">Contacto<img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->

          <?php
            include ('conectar/conexion.php');
            ?>
                    <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Envía tu</em> Comentario</h4>
              </div>
              <form action="" method="POST" class="form-contacto">
                <div class="form-group">
                  <label for="nombre"><strong>Nombre:</strong></label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escribe tu nombre" required>
                </div>
                <div class="form-group">
                  <label for="correo"><strong>Correo:</strong></label>
                  <input type="email" name="correo" id="correo" class="form-control" placeholder="Escribe tu correo" required>
                </div>
                <div class="form-group">
                  <label for="asunto"><strong>Asunto:</strong></label>
                  <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Escribe el asunto" required>
                </div>
                <div class="form-group">
                  <label for="comentario"><strong>Comentario:</strong></label>
                  <!-- Ajustamos el tamaño aquí -->
                  <textarea name="comentario" id="comentario" rows="3" class="form-control comentario-caja" placeholder="Escribe tu comentario" required></textarea>
                </div>
                <div class="main-border-button">
                  <button type="submit">Enviar Comentario</button>
                  
                </div>
              </form>
            </div>
          </div>

          
          
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
           
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts --> 
   <!-- Bootstrap core JavaScript --> 
    <script src="vendor/jquery/jquery.min.js"></script> 
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script> 
    <script src="assets/js/isotope.min.js"></script> 
    <script src="assets/js/owl-carousel.js"></script> 
    <script src="assets/js/tabs.js"></script> 
    <script src="assets/js/popup.js"></script> 
    <script src="assets/js/custom.js"></script> 
    <script>  
      window.addEventListener('load', function() 
      { document.getElementById('js-preloader').style.display = 'none'; }); 
    </script>

  </body>

</html>
