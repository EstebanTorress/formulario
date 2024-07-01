<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estiloformu.css">
</head>
<body>
    <h1 class="encabezado">esta es la lista de temas que se discutiran</h1>
<?php


    try {
        $conexion = new PDO('mysql:host=localhost;dbname=et20','root','');

        $busca = $conexion->query("SELECT * FROM `noticias`");
        
        foreach ($busca as $imagen)
        {  
            
           $a =  $imagen['temas'] . ".php";
        
             echo  '<br> <a class="links" href="' . $a . '">' . $imagen['temas'] . '</a>';
        }


    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

?>







</body>
</html>