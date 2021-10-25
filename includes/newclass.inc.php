<!-- inc in the file name stands for the folder the file belongs to -->
<?php 

// Class is used ot create objects and mainly to categorize our project.

class NewClass {

    // In OOP, we call variables as 'Properties' and functions as 'Methods'.
    // So, the properties and the methods goes here...

    // this is a type of property declaration in the class
    public $info = "This is some info";


}

// Instantiating a class i.e creating an object of the class which has all the access to the info of the class
$object = new NewClass;
// will display the class to which the object belongs too and the content inside the class as well
var_dump($object);