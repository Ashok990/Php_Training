<?php
    class father{
        public $home;
        private $bank_balance_of_father;
        public $business;
        public $car;

        function set_father_property($home, $bank_balance_of_father, $business, $car){
            $this ->home = $home;
            $this ->bankBalanceOfFather = $bank_balance_of_father;
            $this ->business = $business;
            $this ->car = $car;



        }
    }
    class son extends father{
        public $bike = "CBR";
        public $bank_balance_of_son = 10000;

        function get_property(){
            echo "Father bank balance is : $this->bank_balance_of_father <br>";
            echo "Father home is : $this->home <br>";
            echo "Father business is : $this->business <br>";
            echo "Father car is : $this->car <br>";
            echo "My bike name is : $this->bike <br>";



        }
    }

    $obj_of_son = new son;
    $obj_of_son->set_father_property("father Durbar", 100000, "Garrage", "BMW");
    $obj_of_son->get_property();
?>