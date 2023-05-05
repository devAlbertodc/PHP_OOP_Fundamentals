<?php

class Cars{

    function greetings(){
        echo "Hello world";
    }
}

//Distintas variables con las mismas definiciones, es decir, la misma clase.
$bmw = new Cars();
$mercedes = new Cars();


//Forma de llamar al metodo de una clase:  objeto -> nombre del metodo
//Se puede llamar al metodo sin tener que hacer un print del contenido.
$bmw->greetings();
?>