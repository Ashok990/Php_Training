<?php
    class shape{
        public $lenght;
        public $breadth;
        public $height;

        public function set_values($length, $breadth, $height){
            $this->length = $length;
            $this->breadth = $breadth;
            $this->height = $height;
        }
    }

    class rectangle extends shape{
        public $area_of_rectangle;
        public $perimeter_of_rectangle;
        
        function area_of_rectangle(){
            $area_of_rectangle = $this->length * $this->breadth;
            return $area_of_rectangle;
        }

        function perimeter_of_rectangle(){
            $perimeter_of_rectangle = 2*($this->length + $this->breadth);
            return $perimeter_of_rectangle;
        }
    }


    $obj_of_rectangle = new rectangle;
    $obj_of_rectangle->set_values(2,10,10);
    echo "The area of rectangle is ".$obj_of_rectangle->area_of_rectangle(). "<br>";
    echo "The perimeter of rectangle is ".$obj_of_rectangle->perimeter_of_rectangle();
?>