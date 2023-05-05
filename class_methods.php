<?php

class Cars{

    /*Una funcion se declara dentro de una clase.
    Un metodo se llama asi porque es un metodo de la clase y no podemos llamarlo.
    Llamamos a los metodos de funciones cuando estan dentro de la clase y los llamamos funciones*/
    function greeting(){
    }

    function greeting2(){
    }
}

//Almacena en un array todas las clases que utiliza php. Se deberia incluir la clase Cars
/*$my_classes = get_declared_classes();

echo $my_classes;
foreach ($my_classes as $class) {
    echo $class."<br>";
}*/

//Obtiene todos los metodos del parametro que le pasamos al metodo get_class_methods
$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {
    echo $method."<br>";
}
?>