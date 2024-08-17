<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Estrella Amairani Bonilla Lechuga">
    <title>Diseñador Freelancer </title>

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
        <h1>Freelancer<span></span></h1>
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="#">Inicio</a>
            <a href="#">Sobre Mi</a>
            <a href="#">Clientes</a>
            <a href="#">Contacto</a>
            <a href="admin-estrella/login.php">Iniciar Sesion</a>
        </nav>
    </div>

    <section class="hero">
        <div class="contenido-hero">
            <h2>Diseño y desarrollo web <span>Freelancer</span></h2>
            
            <div class="ubicacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                <p class="parrafo-clase">Nanchital, Veracruz</p>
            </div>

            <a class="boton" href="#">Contactar</a>
        </div>
    </section>

    <main class="contenedor sombra">
        <h2>Mis servicios</h2>

        <div class="servicios">
            <section class="servicio-individual">
                <h3>Diseño Web</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                        <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />
                        <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
                        <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
                    </svg>
                </div>
                <p id="parrafo-id">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quisquam ab, amet fuga mollitia.</p>
            </section>

            <section class="servicio-individual">
                <h3>Aplicaciones Web</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="4" y1="10" x2="4" y2="16" />
                        <line x1="20" y1="10" x2="20" y2="16" />
                        <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
                        <line x1="8" y1="3" x2="9" y2="5" />
                        <line x1="16" y1="3" x2="15" y2="5" />
                        <line x1="9" y1="18" x2="9" y2="21" />
                        <line x1="15" y1="18" x2="15" y2="21" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 7c-3 0 -4 3 -4 5.5c0 3 2 7.5 4 7.5c1.088 -.046 1.679 -.5 3 -.5c1.312 0 1.5 .5 3 .5s4 -3 4 -5c-.028 -.01 -2.472 -.403 -2.5 -3c-.019 -2.17 2.416 -2.954 2.5 -3c-1.023 -1.492 -2.951 -1.963 -3.5 -2c-1.433 -.111 -2.83 1 -3.5 1c-.68 0 -1.9 -1 -3 -1z" />
                        <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores dignissimos dolore neque sit! Nesciunt, officia?</p>
            </section>

            <section class="servicio-individual">
                <h3>E-commerce</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="3" y="5" width="18" height="14" rx="3" />
                        <line x1="3" y1="10" x2="21" y2="10" />
                        <line x1="7" y1="15" x2="7.01" y2="15" />
                        <line x1="11" y1="15" x2="13" y2="15" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, temporibus in qui atque beatae recusandae.</p>
            </section>
        </div>


        <section>
            <h2>Contacto</h2>

            <form class="formulario" action="">
                <fieldset>
                    <legend>Contáctanos llenando todos los campos</legend>

                    <div class="contenedor-campos">
                        <div class="campo">
                            <label for="">Nombre</label>
                            <input class="input-text" type="text" placeholder="Nombre">
                        </div>

                        <div class="campo">
                            <label for="">Teléfono</label>
                            <input class="input-text" type="tel" placeholder="Teléfono">
                        </div>
                        
                        <div class="campo">
                            <label for="">Correo</label>
                            <input class="input-text" type="email" placeholder="Correo">
                        </div>

                        <div class="campo">
                            <label for="">Mensaje</label>
                            <textarea class="input-text"></textarea>
                        </div> <!-- contenedor-campos -->
                    </div>  

                    <div class="flex alinear-derecha">
                        <input class="boton w-sm-100" type="submit" value="Enviar">
                    </div>
                    

                </fieldset>
            </form>

        </section>
    
    </main>


    <footer class="footer">
        <p>Copyright &copy; <?php echo date('Y'); ?>Todos los derechos reservados.</p>
    </footer>
</body>
</html>