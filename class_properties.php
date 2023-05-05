<?php

class Cars{

    //Forma de crear una variable, que es la propiedad, atributo de una clase
    var $wheel_count = 4;
    var $door_count = 4;

    function greetings(){
        echo "Hello world";
    }

    //This hace referencia a esta clase especifica, a la clase Cars y despues de -> indicamos la propiedad de la clase.
    function car_detail(){
        return "Este coche tiene ".$this->wheel_count." ruedas";
    }
}

$bmw = new Cars();
$mercedes = new Cars();

//Mostramos el valor de una propiedad de la misma forma que llamando a un metodo de una clase:
echo $bmw->wheel_count."<br>";

//Modificamos el valor de una propiedad y mostramos por pantalla. Saca el nuevo valor que hemos definido.
echo $bmw->wheel_count = 10;
echo "<br>";

//Comprobar que se muestra el nuevo valor asignado y no el valor definido inicialmente en la clase.
echo $bmw->wheel_count;
echo "<br>";

//Mostramos el resultado de llamar al metodo:
echo $bmw->car_detail();

?>