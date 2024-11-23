<?php
$host = 'sql208.infinityfree.com';
$db = 'if0_37771138_dblibreria'; 
$user = 'if0_37771138'; 
$pass = 'V685AQyiAlG'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $asunto = htmlspecialchars($_POST['asunto']);
    $comentario = htmlspecialchars($_POST['comentario']);
    $fecha = date('Y-m-d H:i:s'); // Obtiene la fecha actual

    try {
       
        $stmt = $pdo->prepare("INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (:fecha, :correo, :nombre, :asunto, :comentario)");
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':asunto', $asunto);
        $stmt->bindParam(':comentario', $comentario);

        
        $stmt->execute();
        echo "<script>alert('Comentario enviado exitosamente.'); href='contacto.php';</script>";
    } catch (PDOException $e) {
        echo "Error al guardar el comentario: " . $e->getMessage();
    }

}
?>
