<?php

class Cars{
    //Todas las variables independientemente de su modificador de acceso se pueden trabajar dentro de la misma clase.


    //Esta propiedad puede ser usada en cualquier sitio del programa.
    public $wheel_count = 4;

    //Visible solo para la clase donde se ha creado.
    private $door_count = 4;

    //Solo visible para la clase donde se usa y las subclases que haga extends de cars.
    protected $seat_count = 2;

    //This hace referencia a esta clase especifica, a la clase Cars y despues de -> indicamos la propiedad de la clase.
    function car_detail(){
        echo $this->wheel_count."<br>";
        echo $this->door_count."<br>";
        echo $this->seat_count."<br>";
    }
}

$bmw = new Cars();
//echo $bmw->door_count;
echo $bmw->car_detail();
?>