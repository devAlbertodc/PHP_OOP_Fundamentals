<?php

    //Me devuelve la ruta del fichero actual para ver si existe:
    echo __FILE__."<br>";

    //Muestra en que linea esta el codigo
    echo __LINE__."<br>";

    //Nombre del directorio sin el nombre del fichero:
    echo __DIR__."<br>";

    //Comprueba si un fichero existe:
    if(file_exists(__DIR__)){
        echo "Yes<br>";
    }

    //Comprueba si un directorio existe, mostrara que no porque un directorio no es un fichero:
    if(is_file(__DIR__)){
        echo "Yes<br>";
    }else{
        echo "No<br>";
    }

    if(is_file(__FILE__)){
        echo "Yes<br>";
    }else{
        echo "No<br>";
    }

    if(is_dir(__FILE__)){
        echo "Yes<br>";
    }else{
        echo "No<br>";
    }

    //Si el fichero existe muestra si, en caso contrario muestra no.
echo file_exists(__FILE__) ? "yes" : "no";

?>