<?php 

    include "includes/person.inc.php";
    include "includes/student.inc.php";

    // Inheritance and access modifiers
        /* $pet = new Pet();
        echo $pet->owner(); */

    // methods and properties
        // So using classes and objects we can create multiple objects having same properites and access to all methods of the class.
        /* $student1 = new Student();
        $student1->setName('Raj');
        echo $student1->name;

        $student2 = new Student();
        $student2->setName("ABC");
        echo $student2->name; */

    // Constructor
        // As the constructor is called automatically when the object of the class is created, we need to pass in the data that the constructor requires as parameters 
        /* $student1 = new Student('XYZ', 'gray', 24);
        $student1->setName("PQR");
        echo $student1->getName(); */
        
    // Deleting an object
        /* $Pet = new Pet();
        unset($Pet);                // function to delete the object
        echo $Pet->owner(); */


    // Static properties and methods
    // $obj = new Student('Raj', 'Black', 21);
    // echo $obj->getDA();

?>