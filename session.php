<?php
//TENER UNA SESSION ABIERTA SEGUN UN USUARIO
session_start();
$_SESSION["usuario"]="camilo";
$_SESSION["estado"]="logueado";

echo "Sesión iniciada"."<br/>";
echo "Usuario: ".$_SESSION["usuario"]." estado: ".$_SESSION["estado"]."</br>";

if(($_SESSION["usuario"])){
    echo " Aqui esta abierta la sessión"."</br>";
}else{
    echo "por aqui no pasara ya que el cierre esta abajo, jejejeje";
}

//se desconecta, se cirrar o destruye sesión
session_destroy(); //cierra seccion 
session_start(); // sale error que no esta autenticado
if($_SESSION["usuario"]){
    echo " por aqui no pasara ya que el cierre esta arriba, jejejeje";
}else{
    echo "la instrución session_destroy(); cierra la conexion"."</br>";
}
echo "se desconecta, se cirrar o destruye sesión "

?>