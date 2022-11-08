<?php
 // Base de datos
 require 'includes/database.php';

 include "includes/header.php";

 $db = conectarDB();
 $_SESSION["carrito"] = array();

 if($_SESSION["idUsuario"]==0){
    header('location: adminProductos.php');
}else if(isset( $_SESSION["idUsuario"])){
    $idU = $_SESSION["idUsuario"];

    //NUEVO
    $nombreCuenta = $_SESSION['nombredeusuario'];
    $telefonoCuenta = $_SESSION['telefonodeusuario'];
    $correoCuenta = $_SESSION['correodeusuario'];
    $direccionCuenta = $_SESSION['direcciondeusuario'];
    $ciudadCuenta = $_SESSION['ciudaddeusuario'];
    $codpostalCuenta = $_SESSION['codpostaldeusuario'];
    $idusuarioCuenta = $_SESSION['idUsuario'];
     
    
    //NUEVO

     // Consultar para obtener los productos del carrito del usuario
    $consulta = "SELECT * FROM carrito where id_usuario = $idU";
    } else{
        if($_SESSION['compra']){
            $idP= $_SESSION["idP"];
            $version = $_POST["version"];
            $cantidad= $_POST["cantidad"];

            // Consultar para obtener los datos del producto
            $consulta = "SELECT * FROM catalogo where id_catalogo = $idP";
            $_SESSION['compra'] = false;
        }else{
            header('location: loginPrincipal.php');
            
                       
        }
    }

 $resultado = mysqli_query($db, $consulta);
 


   
?>

 

<body>

    <div   style="overflow-x: auto;" class = "centrarTextoNos pagar ">
        <table class = "carrito">
            <tr>
              <th>Productos</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Total</th>
              <th>Eliminar<th>
            </tr>

            <?php $suma = 0 ; $sumaTotal = 0; ?>
           
            
            <?php while($producto = mysqli_fetch_assoc($resultado)):?>
                <?php array_push( $_SESSION["carrito"], $producto );?>
              <tr>
                <td><?php echo $producto['nombre']?? $producto['nombre_videojuego']; ?>  </td>
                <td><?php echo "$".$producto['precio']; ?></td>
                <td><input class="formulario__campo campo2" type="number" 
                name= "cantidad" name ="cantidad" onclick =
                 "aumentarCant($producto['id_usuario'] $producto['id_catalogo'] cantidad)" 
                 value = <?php echo $producto['cantidad']?? $cantidad; ?> min="1" action = "pagar.php"></td>
                <?php $cantidad = $producto['cantidad']?? $cantidad;
                 $suma = $cantidad*$producto['precio'];  
                $sumaTotal += $suma; ?>
                <td><?php  echo "$".$suma; ?></td>
                <td> <a href = "">Borrar</a></td>
            </tr>
                
            <?php endwhile; ?>
           

        </table>

        <table class = "carrito">
            <tr>
              <th> Total a Pagar</th>
              <th>Maneras de Pagar</th>
            </tr>
            <tr>
                <td><?php echo "$".$sumaTotal.".00 MXN";?></td>
                <td> <?php include 'includes/paypal.html'; ?> </td>
            </tr>
          
        </table>
        
    </div>
    
    <!--NUEVO-->
    <!--Se crean variables hidden que guardan los datos del usuario para usarse en el PHP del PDF-->
    <form name='pdf' method='post' action='reciboPDF.php'><br>
    <input type="submit" value= "Pagar Prueba" name="generarRecibo" class ="formulario__submit" />
    <input type="hidden" value="<?php echo htmlspecialchars($nombreCuenta) ?>" name="nombredeusuario" id="nombredeusuario">
    <input type="hidden" value="<?php echo htmlspecialchars($telefonoCuenta) ?>" name="telefonodeusuario" id="telefonodeusuario">
    <input type="hidden" value="<?php echo htmlspecialchars($CorreoCuenta) ?>" name="correodeusuario" id="correodeusuario">
    <input type="hidden" value="<?php echo htmlspecialchars($direccionCuenta) ?>" name="direcciondeusuario" id="direcciondeusuario">
    <input type="hidden" value="<?php echo htmlspecialchars($ciudadCuenta) ?>" name="ciudaddeusuario" id="ciudaddeusuario">
    <input type="hidden" value="<?php echo htmlspecialchars($codpostalCuenta) ?>" name="codpostaldeusuario" id="codpostaldeusuario">
    <input type="hidden" value="<?php echo htmlspecialchars($codpostalCuenta) ?>" name="codpostaldeusuario" id="codpostaldeusuario">
    <input type="hidden" value="<?php echo htmlspecialchars($cantidad) ?>" name="cantidad" id="cantidad">

    <input type="hidden" value="<?php echo htmlspecialchars($sumaTotal) ?>" name="sumatotaldeusuario" id="sumatotaldeusuario">
    </form>
    <!--NUEVO-->
        
    
    <!--Páginas extras del producto-->
</body>

<?php include "includes/footer.html"?>

