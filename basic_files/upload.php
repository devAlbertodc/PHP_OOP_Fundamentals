<?php

    //Muestra informacion asociada al fichero que se ha subido:
    
    /*Comprobamos que se haya pulsado el boton de hacer submit
    antes de seguir porque da undefined index.*/
    if(isset($_POST['submit'])){
       
        /*Se crea un array asociativo con la clave como la constante del fallo
        y el valor asignado es el motivo del fallo*/
        $upload_errors = array (
            UPLOAD_ERR_OK => "There is no error",
            UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload max filesize limit",
            UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the max filesize limit",
            UPLOAD_ERR_PARTIAL => "PARTIAL ERROR",
            UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded",
            UPLOAD_ERR_NO_FILE => "No file was uploaded",
            UPLOAD_ERR_NO_TMP_DIR => "Missing Temporary folder",
            UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
            UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload"
            );

        //Accedo al nombre temporal de donde se ha subido el fichero
        $temp_name = $_FILES['file_upload']['tmp_name'];
        $the_file = $_FILES['file_upload']['name'];

        $directory = "uploads";

        /*Para mover ficheros entre directorios indicamos el fichero a mover
        y el directorio de destino. La funcion devuelve true o false*/
        if(move_uploaded_file($temp_name, $directory."/".$the_file)){
            $the_message = "File uploaded successfully!<br>";
        }else{
            //Guardamos el error que se ha producido de subir el fichero
            $the_error = $_FILES['file_upload']['error'];

            //En la posicion del array del error guardamos el mensaje a mostrar:
            $the_message = $upload_errors[$the_error];
        }
   }
?>


<html>
<head>
    <meta charset="UTF-8">
    <title> Document </title>
</head>
<body>

<!-- Enctype nos permite subir otros tipos de datos-->
    <form action="upload.php" enctype="multipart/form-data" method="post">
        
        <?php
            //Si el array no esta vacio:
            if(!empty($upload_errors)){
                echo $the_message;
            }
        ?>
        
        <!--Este tipo de input abre una ventana para elegir el fichero-->
        <input type="file" name="file_upload"> <br>

        <input type="submit" name="submit">
    </form>

</body>
</html>