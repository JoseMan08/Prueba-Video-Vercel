<?php
    $carpeta="../ficheros/";
    $nombreOriginal=basename($_FILES["fichero"]["name"]);
    $uploadOK=1;
    $formatoImagen=strtolower(pathinfo($nombreOriginal, PATHINFO_EXTENSION));
    $nombreUnico=md5(uniqid());
    $nombreFinal=$carpeta . $nombreUnico . "." . $formatoImagen;
    $imagenAMostrar="ficheros/" . $nombreUnico . "." . $formatoImagen;

    $check = getImageSize($_FILES["fichero"]["tmp_name"]);

    if($check===false){
        echo "Ek archivo no es una imagen";
        $uploadOK=0;
        
    }
    if($_FILES["fichero"]["size"]>10000000000){
        echo "Tu archivo es demasiado grande";
        $uploadOK=0;
        
    }
    if($uploadOK===1){
        if(move_uploaded_file($_FILES["fichero"]["tmp_name"],$nombreFinal)){
            echo $imagenAMostrar; 
        }else{
            echo "A ocurrido un error";
        }
    }
?>