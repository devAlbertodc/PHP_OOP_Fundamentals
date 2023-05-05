<?php

class Cars{
    /*Para acceder a las propiedades de un objeto hay que instanciar ese objeto y hacer objeto->variable.
    Para la propiedad estatica no es necesario crear un objeto, solo llamar a la clase y hacer Cars->door_count*/

    //Esta propiedad puede ser usada en cualquier sitio del programa.
    static $wheel_count = 4;

    /*This hace referencia a esta clase especifica, a la clase Cars y despues de -> indicamos la propiedad de la clase.
    Si la funcion es estatica, no requerimos usar $this porque no trabajamos con una instancia de la clase.
    Trabajamos sobre la propia clase*/
    static function car_detail(){
        return self::$wheel_count."<br>";
    }
}

//Clase que hereda las propiedades de Cars:
class Trucks extends Cars{

    //Método que muestra propiedades de la clase padre. De esta forma llamamos a un metodo de la clase cars:
    static function display(){
        echo parent::car_detail();
    }
}

//Forma de llamar a un metodo estatico de la clase padre:
echo Trucks::display();
?>