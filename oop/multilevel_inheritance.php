<?php
class Father{
    public $home;
    public $business;
    public $car;


    function set_father_property($home, $business, $car){
        $this->home = $home;
        $this->business = $business;
        $this->car = $car;
    }

}


class son extends Father{

    public $sum;

    function get_father_property(){
        $sum = $this->home . $this->business . $this->car;
        return $sum;
    }


}

class grandson extends son{
    function get_all_property(){
        echo "All property of Father and Grandfather are:". $this->get_father_property();
    }
}
$obj_of_grandson = new grandson;
$obj_of_grandson->set_father_property("Durbar <br> ", "Car Showroom <br>", "Mercedes ");
$obj_of_grandson->get_all_property();

?>