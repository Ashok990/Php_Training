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
        class Parent_Class{
            public $a;
            public $b;

            function set_value($P_a, $P_b){
                global $a;
                $a = $P_a;
                $this -> $P_b;
            }
        }

        class Child_class extends Parent_Class{
           function display(){
               global $a;
               echo "Value of a is: $a";
               echo "value of B : $this ->b";
           }
        }
        $obj_Child = new Child _class;
        $obj_Child->set_value(20,30);
        $obj_Child ->display();
    ?>
</body>
</html>