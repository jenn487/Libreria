<?php
   include ('conectar/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Autores</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
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
                    <a href="index.php" class="logo">
                    <h4><em>LIBRERIA WEB</em></h4>
                    </a>
                    <ul class="nav">
                        <li><a href="libros.php">Libros</a></li>
                        <li><a href="autores.php">Autores</a></li>
                        <li><a href="contacto.php" class="active">Contacto<img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>  
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
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
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Autores</em> de Libros</h4>
              </div>
              <?php
                try {
                    $query = "SELECT * FROM autores";
                    $stmt = $pdo->query($query);

                    if ($stmt->rowCount() > 0):
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                            <div class="item">
                                <ul>
                                    <li><img src="assets/images/libreria.jpeg" alt="" class="templatemo-item"></li>
                                    <li><h4>Nombre: <?php echo htmlspecialchars($row['nombre']); ?></h4></li>
                                    <li><h4>Ciudad: <?php echo htmlspecialchars($row['ciudad']); ?></h4></li>
                                </ul>
                            </div>
                        <?php endwhile;
                    else: ?>
                        <p>No se encontraron registros.</p>
                    <?php endif;
                } catch (PDOException $e) {
                    echo "<p>Error al realizar la consulta: " . $e->getMessage() . "</p>"; 
                } 
              ?>
            </div>
          </div>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
