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
echo "We are learning OOP <br>";
    class shape{
            public $name;
            public $length;
            public $breadth;

            public $height;

            protected $myFriend;


    public function set_values($my_name, $my_length, $my_breadth, $my_height, $my_myFriend){
        
        $this ->name = $my_name;
        $this ->length = $my_length;
        $this ->breadth = $my_breadth;
        $this ->height = $my_height;
        $this ->myfriend = $my_myFriend;

    }

    public function display(){
        echo "Hellow PHP <br>";
        echo ".........................<br>";
        echo "I am $this->name with length $this->length, breadth $this->breadth, height $this->height . I am here with my firend $this->myf    riend";
    }

    private function my_pivate_function(){
        echo "Hellow i am private funciton";
    }

    protected function my_protected_funciton(){
        echo "hwellow I am protected";

    }
    }
    $s1 = new shape();
   $s1 ->set_values("Rectangle", 20, 30, 10, "square");
   $s1 ->display();
    ?>
</body>
</html>