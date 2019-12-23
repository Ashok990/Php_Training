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
    class Father{
        public $property1;
        public $property2;
        public $business;

    }

    class son extends Father{
        public $marriage;
        public $sum;
        public $sub_sum;

        function sum_of_property_of_Father($property1, $property2){
                $this->sum = $property1 + $property2;
                return $this->sum; 
        }
        function check_marriage_status(){
            $this->sum == $this->property1 + $this->property2;
            $this->sub_sum = $this->sum -25;

            if($this->marriage == false){
                echo "I will get ".$this->sub_sum;
            }else{
                echo "I wii get full property $this->sum";
            }

        }               
        }



    class Daughter extends Father{
        public $marriage = true;
    }

    $obj_of_son = new son;
    $obj_of_son->sum_of_property_of_Father(200000, 10000);
    $obj_of_son->check_marriage_status();

    ?>
</body>
</html>