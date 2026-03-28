<?php 
class Car{ 
    public $name;
    public $model = "e01";
    public $color;

    public function setName($nam)
    {
        $this->name = $nam;
    }
    public function getName()
    {
        return $this->name;
    }

    public function __construct($n, $c){ 
        $this->name = $n;
        $this->color = $c;

        echo "Hello " . $this->name . " is " . $this->color;
    }

    public function __destruct(){ 
        echo "<br>bye";
    }
}

$result = new Car("Toyota", "Red");
$result->setName("BMW");
echo "<br>";
echo $result->getName();



?>