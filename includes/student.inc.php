<?php 

class Student {
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 1;

    // A constructor is called when the object of the class is created
    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    
    }

    public function getDA(){
        // static properties and methods are accessible using (::) operator
        return self::$drinkingAge;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}