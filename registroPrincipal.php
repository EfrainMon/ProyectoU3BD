<?php include "includes/header.php" ?>
<body>


    <section>
        <div>
            <h2 class="titulo"> Registrarse </h2>
        </div>
        <form id="form1" name="form1" method="post" action="registro.php" class="formulario">
            <fieldset>


                <div>
                    <div class="campo   reg100">
                        <label> Nombre </label>
                        <input class="input-text" type="text" placeholder="Ingresa tu Nombre" name="nombre" id="nombre">
                    </div><br>

                    <div class="campo   reg100">
                        <label> Teléfono </label>
                        <input class="input-text" type="tel" placeholder="Ingresa tu Teléfono" name="telefono" id="telefono">
                    </div><br>

                    <div class="campo   reg100">
                        <label> Correo </label>
                        <input class="input-text" type="email" placeholder="Ingresa tu Email" name="correo" id="correo">
                    </div><br>

                    <div class="campo   reg100">
                        <label> Dirrecion de entrega </label>
                        <input class="input-text" type="text" placeholder="Ingresa la Dirrecion de entrega del producto"
                        name="direccion" id="direccion">
                    </div><br>
                <!--Nuevo-->
                    <div class="campo   reg100">
                        <label> Ciudad </label>
                        <input class="input-text" type="text" placeholder="Ingresa la ciudad de entrega."
                        name="ciudad" id="ciudad">
                    </div><br>

                    <div class="campo   reg100">
                        <label> Código Postal </label>
                        <input class="input-text" type="text" placeholder="Ingresa el C.P "
                        name="cod_postal" id="cod_postal">
                    </div><br>
                <!--Nuevo-->    

                    <div class="campo  reg100">
                        <label> Contraseña </label>
                        <input type="password" placeholder="Ingresa tu contraseña" name="contrasena" id="contrasena"></textarea>
                    </div><br>
                    <div class="campo  reg100">
                        <label> Confirma Contraseña </label>
                        <input type="password" placeholder="Ingresa nuevamente tu contraseña" name="contrasenaC" id="contrasenaC"></textarea>
                    </div><br>


                    <div class="enviar alinearVertHorReg">
                        <input type="submit" value="Registrarse" onclick="registro.php">
                        <p class="titulo"> Si ya tienes una cuenta puedes iniciar sesión aqui abajo. </p>
                        <a href="login.php" class="botont">Iniciar Sesion</a>
                    </div>
                    <br>
                </div>
            </fieldset>
        </form>
    </section>
    <br>

    <!--Páginas extras del producto-->
    
</body>
    <?php include "includes/footer.html" ?>
