<?php

class Cars{

    var $wheels = 4;

    /*Una funcion se declara dentro de una clase.
    Un metodo se llama asi porque es un metodo de la clase y no podemos llamarlo.
    Llamamos a los metodos de funciones cuando estan dentro de la clase y los llamamos funciones*/
    function greeting(){
        echo "Hola";
    }
}

$bmw = new Cars();


//Camion hereda de la clase Coche:
class Trucks extends Cars{
    /*La variable wheels ahora vale 10 porque lo hemos indicado.
    Si la variable existe en la clase hija el valor de la variable se sobreescribe.
    Si la variable no existe en la clase hija, el valor de la variable será el que tenga la clase padre.*/
    var $wheels = 10;
}

$tacoma = new Trucks();
echo $tacoma->wheels;
?>