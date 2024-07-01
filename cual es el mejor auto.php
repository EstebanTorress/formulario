<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloformu.css">
    <title>Document</title>
</head>
<body>

<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=et20','root', '');
} catch (PDOException $e){

echo 'Falló la conexión: ' . $e->getMessage();

}
if($_POST){
     
            if(!empty($_POST['nombre']) && !empty( $_POST['comentario'])){
                
                $nombre=$_POST['nombre'];
              $comentario=$_POST['comentario'];
              $fecha=date('Y-m-d');
             $conexion->query("INSERT INTO `cual es el mejor auto` (`ID`, `nombre`, `comentario`, `fecha`) VALUES (NULL, '$nombre','$comentario','$fecha')");
    
    
            }else{
            
            }        
        }
?>
<div class="caja">
            <a class="link" href="conexion.php">
                <img class="img" src="../esteban/imagenes/keyboard-left-arrow-button_icon-icons.com_72692.png">
            </a> 
        <h1 class="encabezado">aca se discute cual es el mejor auto</h1>
    
    <div class="formulario">
        <br>
        <form action="cual es el mejor auto.php" method="post" >
        nombre: <input type="text" name="nombre">
        </br>
        <br>
        comentario: <input type="text" name="comentario" >
        </br>
        <br>
         <input type="submit" value="enviar datos">
         </form>
        </br>
        
    </div>
</div>
<?php
 $busca = $conexion->query("SELECT * FROM `cual es el mejor auto`");
          
 foreach ($busca as $imagen)
 {  
   echo "<p class='comentarioo'>";
   echo   $imagen['nombre'] ;
   echo "<br>";
   echo   $imagen['comentario'];
   echo "<br>";
   echo   $imagen['fecha'];
   echo "<br>";
   echo "<p/>";
 }

?>

</body>
</html>