<?php
class Car 
{
    public $model = "sd12";
    public $color = "white";
    public $name = "BMW";

    function info($c)
    {
        $this->color = $c;
        return $this->color;
    }
}

$result = new Car();

echo $result->model;
echo "<br>";
echo $result->info("red");
?>