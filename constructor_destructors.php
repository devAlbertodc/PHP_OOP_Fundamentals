<?php

class Cars{

    //Esta propiedad puede ser usada en cualquier sitio del programa.
    public $wheel_count = 4;
    static $door_count = 4;

    //This hace referencia a esta clase especifica, a la clase Cars y despues de -> indicamos la propiedad de la clase.
    function __construct(){
        /*Podemos modificar el valor de una variable estatica, de forma que siempre que se
        cree un objeto valdra 4, pero para cada objeto en el constructor se incrementara su valor*/
        echo self::$door_count++;
        echo "<br>";
    }

    function __destruct(){
        /*Podemos modificar el valor de una variable estatica, de forma que siempre que se
        destruya un objeto valdra un numero menos*/
        echo self::$door_count--;
        echo "<br>";
    }

    /*Como este metodo no es el constructor cuando crees el objeto no se mostrara nada por pantalla, porque el metodo no se llama __construct.
    Cuando se instancia uno objeto, sin que tenga que realizar nada, se llama al metodo __construct de la clase*/
    function details(){
        echo $this->wheel_count."<br>";
    }
}

//Cada vez que instanciamos un nuevo objeto de la clase se llama al metodo __construct (son 2 _ )
$bmw = new Cars();

$mercedes1 = new Cars();
$mercedes2 = new Cars();
$mercedes3 = new Cars();
?>