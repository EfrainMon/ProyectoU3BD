<?php
// Base de datos
require 'includes/database.php';
include "includes/header.php";

$db = conectarDB();
$id = $_GET['producto'] ;
$_SESSION["idP"] = $id;

// Consultar para obtener los vendedores
$consulta = "SELECT * FROM catalogo where id_catalogo = $id";


$resultado = mysqli_query($db, $consulta);
$producto =  mysqli_fetch_assoc($resultado);




?>



<body>

    
    <main class="contenedor">
        <h3 class = "centrarTexto"> <?php echo $producto['nombre_videojuego'] ?></h3>
        <div class="nosotros">
            <div>
            <img class="img100 imgProducto" src= <?php echo $producto['imgLink'] ?> alt="Imagen del Producto">
            </div>
            
            <div>
                <p class = "fs15 "><?php echo $producto['descripcion'] ?></p>
                <form class="formCompra" method="POST"  action=
                <?php echo isset($_SESSION["idUsuario"])? "insertarCarr.php" : "pagar.php"; ?> >
                    <select class="campo2" id = "version" name = "version" >
                        <option disabled selected value= "Fisica">-- Seleccionar Version --</option>
                        <option value= "Digital">Digital</option>
                        <option value= "Fisica">Fisica</option>
                        
                    </select>
                    
                    <input class="formulario__campo campo2" type="number" name= "cantidad" id = "cantidad" placeholder="Cantidad" min="1">
                    
                    <input class="formulario__submit titulo" type="submit" value=
                    <?php echo isset($_SESSION["idUsuario"])? "Agregar&#32Al&#32Carrito" : "Comprar&#32Producto"; ?> onclick = <?php $_SESSION['compra'] = true; ?>>
                    
                
                </form>
             </div>
             <div>
                    <h4 class="centrarTexto"> Precio: <?php echo $producto['precio'] ?>  </h4>
                    <h4 class="centrarTexto"> Versiones Fisicas disponibles : <?php echo $producto['stock'] ?> </h4>
                </div>
            </div>
    </main>
   
    </div>
    
    
</body>

<?php  include "includes/footer.html" ?>

