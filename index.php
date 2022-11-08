<?php include "includes/header.php" ?>

<body>

    <!--Banner con fondo de imagen sobre videojuegos y texto-->
    <section class="imagenBannerP">
        <div class="sombreadoBanner alinearVertHor ">
            <h1 class="centrarTexto"> ¡Bienvenido a Gameshop tu tienda favorita de videojuegos! </h1>
            <h2 class="centrarTexto">
                <br>
                ¡Aquí encontrarás los mejores videojuegos de tus consolas
                favoritas y con grandes ofertas!
                </br>
            </h2>
        </div>

    </section>
    <!--Banner con fondo de imagen sobre videojuegos y texto-->

    <section class="titulo">
        <h1> Checa nuestro catálogo: </h1>
    </section>

    <div class="gridConsolas">
        <section class="nintendoLogo alinearVertHor">
            <a href="catalogo.php #nintendo">
                <h1> Nintendo </h1>
            </a>
        </section>

        <section class="xboxLogo alinearVertHor">
            <a href="catalogo.php #xbox">
                <h1> XBOX </h1>
            </a>
        </section>

        <section class="playstationLogo alinearVertHor">
            <a href="catalogo.php #playstation">
                <h1> PlayStation </h1>
            </a>
        </section>

        <section class="pcLogo alinearVertHor">
            <a href="catalogo.php #PC">
                <h1> PC </h1>
            </a>
        </section>
    </div>

    <section class="imagenBannerP2">
        <div class="sombreadoBanner alinearVertHor centrarTexto">
            <h2 class="textoBannerP"> Gameshop es una tienda de videojuegos que combina las
                grandes ofertas de la competencia...¡y las mejora!.

                <p> Además, tenemos una gran variedad de videojuegos para
                    cualquiera de tus consolas preferidas, y un tiempo de
                    entrega impecable. Puedes consultar más sobre nosotros
                    en el aparado de <a href="Quienes Somos.php"> Nosotros. </a>

            </h2>
        </div>

    </section>

    <!--Apartado Final de contacto-->
    <section>

        <a name="contacto">
            <h2 class="titulo"> Contacto </h2>
        </a>
        <form class="formulario">
            <fieldset>
                <div class="colorBlanco">
                    <legend> ¿Tienes algún problema? Contáctanos llenando todos los campos. </legend>
                </div>

                <div class="contenedor-campos">
                    <div class="campo">
                        <label> Nombre </label>
                        <input class="input-text" type="text" placeholder="Ingresa tu Nombre">
                    </div>

                    <div class="campo">
                        <label> Teléfono </label>
                        <input class="input-text" type="tel" placeholder="Ingresa tu Teléfono">
                    </div>

                    <div class="campo">
                        <label> Correo </label>
                        <input class="input-text" type="email" placeholder="Ingresa tu Email">
                    </div>

                    <div class="campo">
                        <label> Dinos qué necesitas </label>
                        <textarea class="input-text"></textarea>
                    </div>
                </div>

                <div class="alinear-centro flex">
                    <input class="boton w-sm-50" type="submit" value="Enviar">
                </div>

                <p class="centrarTexto">
                    Además, si lo deseas, puedes contactarnos por estos medios también:
                </p>

                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp"
                        width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="#00b341" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path
                            d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                    </svg>
                    WhatsApp: +52 871-125-1867
                </p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="20"
                        height="20" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="3" y="5" width="18" height="14" rx="2" />
                        <polyline points="3 7 12 13 21 7" />
                    </svg>
                    Email: soporte@gameshop.com
                </p>

            </fieldset>
        </form>
    </section>
   

   

</body>
    <?php include "includes/footer.html" ?>
