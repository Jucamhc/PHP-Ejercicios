<?php

$servidor="localhost"; // conexion local 
$usuario="root";
$contrasenia="";
$nameDb="album";

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$nameDb", $usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //INSERTAR
    //$sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando 3', 'foto3.png');";
    //$conexion->exec($sql);


    //CONSULTAR 
    
    $sql="SELECT * FROM `fotos`";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    
    //Imprimir en un array completo
    //print_r($resultado);

    //IMPRIMIR UNA POSICION DEL ARRAY
    /*foreach($resultado as $foto){
        print_r($foto['nombre']);
    }*/


    echo "conexion Establecida";
}catch(PDOException $error){
    echo "Conexion erronea".$error;
}
?>