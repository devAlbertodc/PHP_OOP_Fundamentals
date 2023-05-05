<?php

class Cars{
    /*Para acceder a las propiedades de un objeto hay que instanciar ese objeto y hacer objeto->variable.
    Para la propiedad estatica no es necesario crear un objeto, solo llamar a la clase y hacer Cars->door_count*/

    //Esta propiedad puede ser usada en cualquier sitio del programa.
    static $wheel_count = 4;

    //Visible solo para la clase donde se ha creado.
    static $door_count = 4;

    /*This hace referencia a esta clase especifica, a la clase Cars y despues de -> indicamos la propiedad de la clase.
    Si la funcion es estatica, no requerimos usar $this porque no trabajamos con una instancia de la clase.
    Trabajamos sobre la propia clase*/
    static function car_detail(){
        /*Forma de mostrar los atributos si el metodo no es estatico:
        echo $this->wheel_count."<br>";
        echo $this->door_count."<br>";
        echo $this->seat_count."<br>";
        */

        //Forma de mostrar los atributos si el metodo es estatico. Lo hacemos igual cuando llamamos a esta funcion estatica.
        //Si el metodo es estatico, las propiedades tambien lo deben ser.
        //Si la variable no es estatica el programa se queda antes del echo y no muestra nada, la variable debe ser estatica.
        echo Cars::$wheel_count."<br>";
        echo Cars::$door_count."<br>";
        echo Cars::$seat_count."<br>";
        

    }
}

$bmw = new Cars();

//No mostrara el valor de la variable porque es estatica, si usamos esto es porque la variable esta definida en la clase con un modificador de acceso sin static.
echo $bmw->door_count."<br>";

/*Para que funcione la llamada a una propiedad estatica hay que usar NombreClase::$nombreVariable.
En el caso normal no es necesario usar $ pero en este caso cuando la variable es estatica, si*/
echo Cars::$door_count."<br>";

//Forma de llamar a un metodo estatico:
echo Cars::car_detail()."<br>";
//
?>