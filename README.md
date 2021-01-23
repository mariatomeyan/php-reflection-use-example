# php-reflection-use-example
This repo will show how useful can be Reflection classes in PHP


- Imagine you have more than one classes that you would like to have access from anywhere and get their all properties 
in an array whith in name of properties with values, Reflection class will help you :D 


So in this example I simply just created an Accessor that you can extend in your all classes, that you want to be get access to all properties.


    $car = new Car();  
    $properties = $car->getProperties();
    
    dd($properties) 
    
    will give you 
    
 array:4 [▼
  "car" => App\Car {#194 ▶}
  "color" => "red"
  "is_active" => false
  "registration_number" => "AS43543"
 ]
