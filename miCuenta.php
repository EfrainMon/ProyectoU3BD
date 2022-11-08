<?php include "includes/header.php" ?>

<?php 

if(!isset($_SESSION['nombredeusuario'])) {
    //Nuevo
    header('location: loginPrincipal.php');
    //Nuevo
} else {
        $nombreCuenta = $_SESSION['nombredeusuario'];
        $telefonoCuenta = $_SESSION['telefonodeusuario'];
        $correoCuenta = $_SESSION['correodeusuario'];
        $direccionCuenta = $_SESSION['direcciondeusuario'];
        $ciudadCuenta = $_SESSION['ciudaddeusuario'];
        $codpostalCuenta = $_SESSION['codpostaldeusuario'];
        $idusuarioCuenta = $_SESSION['idUsuario'];
       }

?>
    <!--Llamar a styles para que se apliquen los cambios
   // <link href="css/styles.css" rel="stylesheet">-->
<body>

<section>
        <div>
            <h2 class="titulo"> Bienvenido a tu cuenta, ¿necesitas ver tus datos o modificarlos? ¡Puedes hacerlo aquí! </h2>
        </div>
        <form id="form1" name="form1" method="post" action="modDatosUser.php" class="formulario">
            <fieldset>

                <div>
                    <div class="campo   reg100">
                        <label> Nombre </label>
                        <input class="input-text" type="text" placeholder="Ingresa tu Nombre" value="<?php echo htmlspecialchars($nombreCuenta) ?>" name="nombreMod" id="nombreMod">
                    </div><br>

                    <div class="campo   reg100">
                        <label> Teléfono </label>
                        <input class="input-text" type="tel" placeholder="Ingresa tu Teléfono" value="<?php echo htmlspecialchars($telefonoCuenta) ?>" name="telefonoMod" id="telefonoMod">
                    </div><br>

                    <div class="campo   reg100">
                        <label> Correo </label>
                        <input class="input-text" type="email" placeholder="Ingresa tu Email" value="<?php echo htmlspecialchars($correoCuenta) ?>" name="correoMod" id="correoMod">
                    </div><br>

                    <div class="campo   reg100">
                        <label> Direcion de entrega </label>
                        <input class="input-text" type="text" placeholder="Ingresa la Direcion de entrega del producto"
                         value="<?php echo htmlspecialchars($direccionCuenta) ?>" name="direccionMod" id="direccionMod">
                    </div><br>

                    <div class="campo   reg100">
                        <label> Ciudad </label>
                        <input class="input-text" type="text" placeholder="Ingresa la ciudad de entrega."
                         value="<?php echo htmlspecialchars($ciudadCuenta) ?>" name="ciudadMod" id="ciudadMod">
                    </div><br>

                    <div class="campo   reg100">
                        <label> Código Postal </label>
                        <input class="input-text" type="text" placeholder="Ingresa el C.P "
                        value="<?php echo htmlspecialchars($codpostalCuenta) ?>" name="cod_postalMod" id="cod_postalMod">
                    </div><br>

                    <div class="campo  reg100">
                        <label> Contraseña </label>
                        <input type="password" placeholder="Ingresa tu contraseña" value="" name="contrasenaMod" id="contrasenaMod"></textarea>
                    </div><br>
                    <div class="campo  reg100">
                        <label> Confirma Contraseña </label>
                        <input type="password" placeholder="Ingresa nuevamente tu contraseña" value="" name="contrasenaCMod" id="contrasenaCMod"></textarea>
                    </div><br>

                    <!--Se crea un type hidden para guardar el id del usuario pero que no se pueda ver ni modificar. Se usa para
                        que php conozca el id del usuario y hacer querys con él.-->
                    <input type="hidden" value="<?php echo htmlspecialchars($idusuarioCuenta) ?>" name="idUsuario" id="idUsuario">


                    <div class="enviar alinearVertHorReg">
                        <input type="submit" value="Modificar mis datos" onclick="modDatosUser.php">
                    </div>
                    <br>
                </div>
            </fieldset>
        </form>
    </section>

</body>


<?php include "includes/footer.html" ?>