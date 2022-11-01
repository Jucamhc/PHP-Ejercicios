<?php 
include("cabecera.php");
include("conexion.php");


if($_POST){
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $fecha = new DateTime();
    $imagen=$fecha->getTimestamp()."_".$_FILES['archivo']['name'];

    $imagen_temporal=$_FILES['archivo']['tmp_name'];
    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);

$objconexion = new conexion();
$sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
$objconexion->ejecutar($sql);
}

if($_GET){
    //"DELETE FROM proyectos WHERE `proyectos`.`id` = 2"
    $objconexion = new conexion();
    $sql="DELETE FROM proyectos WHERE `proyectos`.`id` = ".$_GET['borrar'];
    $objconexion->ejecutar($sql);
}


$objconexion = new conexion();
$resultado=$objconexion->consultar("SELECT * FROM `proyectos`");

?>

<br />

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="">
                        <br/>
                        Imagen del proyecto: <input class="form-control" type="file" name="archivo" id="">
                        <br/>
                        Descripción:
                        <br/>
                        <textarea class="form-control" name="descripcion" id="" rows="3"></textarea>
                        <br/>
                        <input class="btn btn-success" type="submit" value="Enviar Proyecto">
                    </form>
                </div>
            </div>
            <br />


        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagenes</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultado as $proyecto){ ?>
                        <tr >
                            <td><?php echo $proyecto['id']; ?></td>
                            <td><?php echo $proyecto['nombre'];  ?></td>
                            <td><?php echo $proyecto['imagen'];  ?></td>    
                            <td><?php echo $proyecto['descripcion'];  ?></td>
                            <td> <a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a> </td> 
                        </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include("pie.php"); ?>