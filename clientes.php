<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Estrella Amairani Bonilla Lechuga">
    <title>Información para Clientes</title>

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
        <h1>Información para Clientes</h1>
    </header>

    <div class="nav-bg">
    <nav class="navegacion-principal contenedor">
            <a href="index.php">Inicio</a>
            <a href="sobremi.php">Sobre Mi</a>
            <a href="clientes.php">Clientes</a>
            <a href="contacto.php">Contacto</a>
            <a href="colaborador.php">colaborador omar</a>
            <a href="dariana.php">DESARROLLADOR DARIANA</a>
            <a href="estrella.php">DISEÑADORA ESTRELLA</a>
            <a href="admin-omar/login.php">Iniciar Sesion</a>
        </nav>
    </div>

    <main class="contenedor sombra">
        <section class="informacion-clientes">
            <h2>Trabajando Juntos para el Éxito</h2>
            <p>Como cliente, tu éxito es mi prioridad. Me esfuerzo por ofrecer un servicio de alta calidad, orientado a tus necesidades específicas. Aquí encontrarás información clave sobre cómo trabajamos juntos, desde el proceso inicial hasta la entrega final del proyecto.</p>
            
            <h3>Proceso de Trabajo</h3>
            <ol>
                <li><strong>Consulta Inicial:</strong> Nos reunimos para discutir tus necesidades, objetivos y visión para el proyecto.</li>
                <li><strong>Propuesta y Cotización:</strong> Te presento una propuesta detallada, incluyendo un cronograma y presupuesto estimado.</li>
                <li><strong>Diseño y Desarrollo:</strong> Comienzo a trabajar en el diseño y desarrollo, manteniéndote informado con actualizaciones periódicas.</li>
                <li><strong>Revisión y Feedback:</strong> Te presento el trabajo realizado para tu revisión y comentarios.</li>
                <li><strong>Entrega y Soporte:</strong> Una vez aprobado, entrego el proyecto finalizado y ofrezco soporte post-lanzamiento.</li>
            </ol>

            <h3>Servicios Disponibles</h3>
            <ul>
                <li><strong>Diseño Web Personalizado:</strong> Sitios web creados a la medida para reflejar la identidad de tu marca.</li>
                <li><strong>Desarrollo de Aplicaciones Web:</strong> Soluciones interactivas y escalables para mejorar la experiencia del usuario.</li>
                <li><strong>Comercio Electrónico:</strong> Implementación de tiendas en línea con sistemas de pago seguros y fáciles de usar.</li>
                <li><strong>Mantenimiento y Soporte:</strong> Servicios continuos para garantizar que tu sitio web esté siempre actualizado y funcionando sin problemas.</li>
            </ul>

            <h3>Preguntas Frecuentes</h3>
            <ul>
                <li><strong>¿Cuánto tiempo tomará mi proyecto?</strong> El tiempo varía según la complejidad del proyecto, pero se proporcionará un cronograma estimado durante la consulta inicial.</li>
                <li><strong>¿Qué necesito proporcionar para empezar?</strong> Generalmente, necesitaré tu logotipo, paleta de colores, contenido escrito y cualquier imagen o gráfico que desees utilizar.</li>
                <li><strong>¿Cómo se manejan los pagos?</strong> Se requiere un depósito inicial antes de comenzar el trabajo, con el saldo a pagar al finalizar el proyecto.</li>
                <li><strong>¿Ofreces soporte después de la entrega?</strong> Sí, ofrezco soporte post-lanzamiento para ayudarte con cualquier ajuste o mantenimiento necesario.</li>
            </ul>
            
            <h3>Testimonios</h3>
            <blockquote>
                "Trabajar con Estrella fue una experiencia fantástica. Entendió nuestras necesidades y creó un sitio web que superó nuestras expectativas." - Cliente Satisfecho
            </blockquote>
            <blockquote>
                "Profesional y creativa, Estrella nos ayudó a llevar nuestra marca al siguiente nivel con un sitio web impresionante." - Otro Cliente Satisfecho
            </blockquote>
        </section>
    </main>

    <footer class="footer">
        <p>Copyright &copy; <?php echo date('Y'); ?> Estrella Amairani Bonilla Lechuga Freelancer. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
