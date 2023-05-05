<?php

class Cars{
    //Todas las variables independientemente de su modificador de acceso se pueden trabajar dentro de la misma clase.

    //Visible solo para la clase donde se ha creado. Para que se acceda desde otra clase hay que usar getters y setter
    private $door_count = 4;

    //Obtenemos el valor de door_count a traves de una funcion. This hace referencia a esta clase especifica, a la clase Cars y despues de -> indicamos la propiedad de la clase.
    function get_values(){
        echo $this->door_count."<br>";
    }

    function set_values(){
        echo $this->door_count=10;
        echo "<br>";
    }

    function my_set_values($numeroPuertas){
        echo $this->door_count=$numeroPuertas;
        echo "<br>";
    }
}

$bmw = new Cars();

//Obtenemos el valor de la propiedad:
echo $bmw->get_values();

//Asignamos un nuevo valor para la propiedad y muestra por pantalla el nuevo valor asignado:
echo $bmw->set_values(100);

//Obtenemos el mismo valor que el anterior:
echo $bmw->get_values();

?>