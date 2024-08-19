<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Estrella Amairani Bonilla Lechuga">
    <title>Contacto - EABL</title>

    <!-- El orden importa al agregar librerías -->
    <!-- Normalize va al inicio -->
    <link rel="preload" href="css/normalize.css">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Mejorar el performance -->
    <link rel="preload" href="css/estilos.css" as="style">   
    <link rel="stylesheet" href="css/estilos.css">   
</head>
<body>
    
    <header>
        <h1>Contacto</h1>
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="index.php">Inicio</a>
            <a href="sobremi.php">Sobre Mi</a>
            <a href="clientes.php">Clientes</a>
            <a href="contacto.php">Contacto</a>
            <a href="admin-estrella/login.php">Iniciar Sesion</a>
        </nav>
    </div>

    <main class="contenedor sombra">
        <section class="contacto">
            <h2>Ponte en Contacto</h2>
            <p>Si tienes alguna pregunta o quieres hablar sobre un proyecto, no dudes en contactarme a través del siguiente formulario. Responderé lo antes posible.</p>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = htmlspecialchars($_POST['nombre']);
                $email = htmlspecialchars($_POST['email']);
                $mensaje = htmlspecialchars($_POST['mensaje']);
                $para = 'tu_correo@ejemplo.com'; // Cambia esto a tu dirección de correo
                $titulo = 'Mensaje de Contacto de ' . $nombre;
                $headers = 'From: ' . $email;

                // Envía el correo
                if (mail($para, $titulo, $mensaje, $headers)) {
                    echo '<p class="exito">¡Tu mensaje ha sido enviado exitosamente!</p>';
                } else {
                    echo '<p class="error">Lo siento, ha ocurrido un error y tu mensaje no pudo ser enviado.</p>';
                }
            }
            ?>

            <form action="contacto.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea>

                <input type="submit" value="Enviar Mensaje">
            </form>
        </section>
    </main>

    <footer class="footer">
        <p>Copyright &copy; <?php echo date('Y'); ?> Estrella Amairani Bonilla Lechuga Freelancer. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
