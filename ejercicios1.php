<?php

    if($_POST){
    // Recibir el nombre que digite el usuario
    $nombre=$_POST['txtNombre'];
    // Imprime el nombre digitado 
    print "Hola ".$nombre;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <form action="ejercicios1.php" method="post">

        Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>
        <input type="submit" name="Enviar" >

    </form>
</body>
</html>