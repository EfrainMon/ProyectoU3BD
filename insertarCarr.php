<?php
    session_start();
    if(isset($_SESSION["idUsuario"])){
        
   
    $dbhost="localhost";
    $dbname="tienda_gs";
    $dbuser="root";
    $dbpass= "";

    
    $id_p = $_SESSION["idP"];
    $id_u = $_SESSION["idUsuario"];
    
    

    $version = $_POST["version"];
    $cantidad= $_POST["cantidad"];

    $conexion=mysqli_connect($dbhost, $dbuser,$dbpass, $dbname) or
    die("Problemas con la conexión");
    
    $consulta = "SELECT * FROM catalogo where id_catalogo = '$id_p'";
    $resultado = mysqli_query($conexion, $consulta);
    $producto =  mysqli_fetch_assoc($resultado);
    
     
    $nombre = $producto["nombre_videojuego"];
    $precio = $producto["precio"];


    
   
        
    $sql ="INSERT INTO `carrito` (`id_catalogo`, `id_usuario`, `nombre`, `version`, `precio`, `cantidad`) 
    VALUES ('$id_p', '$id_u', '$nombre', '$version', '$precio', '$cantidad');";
   
    $sql2="";

    
    mysqli_query($conexion, "SELECT * FROM carrito");
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    echo "<div align=\"center\"><br>¡Poroducto Agrgado!.</div><br>";
    //echo "<div align=\"center\">Por favor, completa todos los campos.</div><br>"; 
        header('location: pagar.php');
    
    }else{
        echo "<div align=\"center\"><br>¡Algo Salio Mal!.</div><br>";
        header('location: index.php');
    }
    
    

    //en BD phpmyadmin se cambio contraseña por contrasena
    
    ?>