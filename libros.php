<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Libros</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo">
                            
                        </a>
                        <ul class="nav">
                            <li><a href="libros.php">Libros</a></li>
                            <li><a href="autores.php">Autores</a></li>
                            <li><a href="contacto.php" class="active">Contacto</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="library-container container">
        <div class="heading-section">
            <h4><em> </em>Libreria Digital</h4>
        </div>

        <?php
        include('conectar/conexion.php'); 

        try {
            
            $query = "SELECT * FROM titulos";
            $stmt = $pdo->query($query);

            if ($stmt->rowCount() > 0):
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <div class="item">
                        <ul>
                            
                            <li><img src="assets/images/libros.jpeg" alt="Libro" class="templatemo-item"></li>
                            <li><h4> Titulo: <?php echo htmlspecialchars($row['titulo']); ?></h4><br><span>Tipo: </span><span><?php echo htmlspecialchars($row['tipo']); ?></span></li></br>
                            <li><br><br><span>Precio $</span><span><?php echo htmlspecialchars($row['precio']); ?> </span></li>
                            <li><h4>Notas</h4><span><?php echo htmlspecialchars($row['notas']); ?></span></li>
                            <li>
                                
                            </li>
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.
                        <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
