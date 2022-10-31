<?php
$txtNombre="";
$rdgLenguaje="";
$chkphp="";
$chkhtml="";
$chkphp="";
$chkcss="";

$lsAnime="";
$txtComentario="";

if($_POST)
{
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

    $chkphp = (isset($_POST['chkphp'])=="si")? "checked":"";
    $chkhtml = (isset($_POST['chkhtml'])=="si")? "checked":"";;
    $chkcss = (isset($_POST['chkcss'])=="si")? "checked":"";;

    $lsAnime=( isset($_POST['lsAnime']) )?$_POST['lsAnime']:"";  

    $txtComentario=( isset($_POST['txtComentario']) )?$_POST['txtComentario']:"";  
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php if($_POST){ ?>
    <strong> Hola </strong>: <?php echo $txtNombre; ?></br/>
    <strong> Tu Lenguaje es: </strong>: <?php echo $rdgLenguaje; ?></br/>
    <?php } ?>
    <br/>   
        <strong>Tu Lenguaje es: </strong>: <?php echo $rdgLenguaje;?>
        <br/> 
    <strong>Estas Aprendiendo: </strong><br/>
        - <?php echo ($chkphp=="checked")?"PHP":""; ?><br/>
        - <?php echo ($chkhtml=="checked")?"HTML":""; ?><br/>
        - <?php echo ($chkcss=="checked")?"CSS":""; ?><br/>
        <br/>
    <strong>Estas Lenguaje es: </strong> <?php echo $lsAnime; ?>
    <br/>

    <strong>Tu Mensaje es: </strong> <?php echo $txtComentario; ?>

    
    <form action="formularios.php" method="post">
        Nombre:<br/>
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br/>   
        
        ¿Te Gusta??:<br/>
        <br/>php: <input type="radio" <?php echo ($rdgLenguaje == "php")?"checked":"" ?>name="lenguaje" value="php" id=""><br/>
        <br/>html: <input type="radio" <?php echo ($rdgLenguaje == "html")?"checked":"" ?> name="lenguaje" value="html"id=""><br/>
        <br/>css: <input type="radio" <?php echo ($rdgLenguaje == "css")?"checked":"" ?> name="lenguaje" value="css" id=""><br/>

        Estas Aprendiendo...<br/>
        <br/>php:<input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br/>html:<input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
        <br/>css:<input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">
        <br/>

        ¿Que Anime Te Gusta????....<br/>
        <select name="lsAnime" id="" > 
            <option value="">[Ninguna Serie]</option>
            <option value="Naruto"  <?php echo ($lsAnime == "naruto")?"selected":"" ?> >Naruto</option>
            <option value="Bleanch" <?php echo ($lsAnime == "Bleanch")?"selected":"" ?> >Bleanch</option>
            <option value="dragon"  <?php echo ($lsAnime == "dragon")?"selected":"" ?>>Dragon Ball</option>
        </select>
        <br/>

        ¿Tienes alguba Duda?<br/>
        <textarea name="txtComentario" id="" cols="30" rows="10">
            <?php echo $txtComentario; ?>
        </textarea>
        <br/>


        <input type="submit" value="Enviar Informacion">    
    </form>
</body>
</html>