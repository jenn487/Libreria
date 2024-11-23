<?php 
   include ('conectar/conexion.php'); 
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Libreria Jenn</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">

<!-- Header -->
<div id="header">
    <div class="top">
        <div id="logo">
            <span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
            <h1 id="title">Libreria Jenn</h1>
            <p>Bienvenido a nuestra librería</p>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="#top" id="top-link"><span class="icon solid fa-home">Inicio</span></a></li>
                <li><a href="#books" id="books-link"><span class="icon solid fa-book">Libros</span></a></li>
                <li><a href="#authors" id="authors-link"><span class="icon solid fa-user">Autores</span></a></li>
                <li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Contacto</span></a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- Main -->
<div id="main">
    <!-- Intro -->
    <section id="top" class="one dark cover">
        <div class="container">
            <header>
                <h2 class="alt">Bienvenido a <strong>Libreria Jenn</strong></h2>
                <p>Explora nuestra colección de libros y autores.</p>
            </header>
            <footer>
                <a href="#books" class="button scrolly">Ver Libros</a>
            </footer>
        </div>
    </section>

    <!-- Libros -->
    <section id="books" class="two">
        <div class="container">
            <header>
                <h2>Libros Disponibles</h2>
            </header>
            <table>
                <tr>
                    <th>ID Titulo</th>
                    <th>Titulo</th>
                    <th>ID Publicador</th>
                </tr>
                <?php
                $stmt = $pdo->query("SELECT id_titulo, titulo, id_pub FROM titulos");
                while ($row = $stmt->fetch()) {
                    echo "<tr>
                            <td>{$row['id_titulo']}</td>
                            <td>{$row['titulo']}</td>
                            <td>{$row['id_pub']}</td>
                          </tr>";
                }
                ?>
            </table>
        </div>
    </section>

    <!-- Autores -->
    <section id="authors" class="three">
        <div class="container">
            <header>
                <h2>Autores Disponibles</h2>
            </header>
            <table>
                <tr>
                    <th>ID Autor</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
                <?php
                $stmt = $pdo->query("SELECT id_autor, nombre, apellido FROM autores");
                while ($row = $stmt->fetch()) {
                    echo "<tr>
                            <td>{$row['id_autor']}</td>
                            <td>{$row['nombre']}</td>
                            <td>{$row['apellido']}</td>
                          </tr>";
                }
                ?>
            </table>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contact" class="four">
        <div class="container">
            <header>
                <h2>Contacto</h2>
            </header>
            <p>Si tienes alguna pregunta, no dudes en contactarnos.</p>
            <form method=" post" action="enviar_contacto.php">
                <div class="field">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" required />
                </div>
                <div class="field">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" name="email" id="email" required />
                </div>
                <div class="field">
                    <label for="message">Mensaje</label>
                    <textarea name="message" id="message" required></textarea>
                </div>
                <div class="field">
                    <input type="submit" value="Enviar Mensaje" />
                </div>
            </form>
        </div>
    </section>
</div>

<!-- Footer -->
<div id="footer">
    <div class="container">
        <p>&copy; 2023 Libreria Jenn. Todos los derechos reservados.</p>
    </div>
</div>

</body>
</html>