<?php 

// Here we will see about access modifiers (public, private, protected) and Inheritance
/*
    private => only accessible inside the class it is used or declared
    public => accessible anywhere
    protected => accessible only in the class it is declared and the child class inheriting the parent class and outside this (not accessible in index file)
*/

class Person{
    protected $firstName = "Raj";
    private $lastName = "Chaubey";
    private $age = 20;

    public function owner(){
        // We can access the private method by declaring the method as public because it has access to the private properties and as the method is public it can be accessed anywhere
        // this keyword is used to access the properties inside the same class
        $a = $this->firstName;
        return $a;
    }

}

// 'extends' keyword is used to declare inheritance

class Pet extends Person{
    public function owner(){
        // As we have inherited the classes Person and Pet together, so by using the protected visibility, we can use the firstName propoerty inside the child class
        $a = $this->firstName;
        return $a;
    }
}