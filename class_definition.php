<?php

class Cars{


}

//Almacena en un array todas las clases que utiliza php. Se deberia incluir la clase Cars
$my_classes = get_declared_classes();

echo $my_classes;
foreach ($my_classes as $class) {
    echo $class."<br>";
}

?>