<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
class person{
    public  $name;
    public  $height;
    public  $color;
    public  $weight;
    public  $gender;
    public  $age;

    // constructor


    function __construct($name, $height, $color, $weight){
        echo "hey there i am at constructor <br>";
        $this ->name = $name;
        $this ->height = $height;
        $this ->color = $color;
        $this ->weight = $weight;
    }


   
// methods

// function set_name($name){
//     $this ->name = $name;
// }

function get_name(){
    return $this ->name;
}
// set height
//     $this ->height = $height;
// function set_height($height){
// }

function get_height(){
    return $this ->height;
}
// set color
// function set_color($color){
//     $this ->color = $color;
// }

function get_color(){
    return $this ->color;
}

// set weight
// function set_weight($weight){
//     $this ->weight = $weight;
// }

function get_weight(){
    return $this ->weight;
}

function display(){
    echo "hey I am looking at you <br>";
}

function __destruct(){
    echo "Good Bye See you tomorrow <br>";
}

}

class Animal{
    public $name;

    function Animal($p_name){
        $this ->name = $p_name;
    }
}

// make objec of type person
$p1 = new person("ashok", "12", "red", "20kg");
echo $p1 -> display();
// $p2 = new person();
// $p3 = new person();
// $p4 = new person();
// print_r($p1);
// var_dump($p1);

// $p1 -> set_name("Ashok ");
echo "Name = " .  $p1 ->get_name();

// $p2 -> set_height(12);
echo "Age = " .$p1 ->get_height();
// $p3 -> set_weight("20 KG");
echo "Weight = " .$p1 ->get_color();

// $p4 -> set_color("Blue");
echo "Color = " .$p1 ->get_weight();


// object animal
$a1 = new Animal("Zebra");
echo ""



?>
</body>
</html>