<?php

class Car
{
    public $name = "BMW";
    public $model = "i50";

    public function carInfo()
    {
        echo "This is " . $this->name . "<br>";
    }
}
?>