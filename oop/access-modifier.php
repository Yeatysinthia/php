<?php
class Student
{
    public $name = "sinthia";
    private $age = 22;
    protected $degree = "BSC";

  
    public function fullInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Degree: " . $this->degree . "<br>";
    }


    public function getAge()
    {
        return $this->age;
    }


    public function getDegree()
    {
        return $this->degree;
    }
}

class child extends Student 
{
    public function show()
    {
        echo "My degree" . $this->degree;
    }

}

$result = new Student();

$child = new Child();
echo "<br>";
$child->show();
echo "<br>";


echo "Name: " . $result->name . "<br>";


echo "Age: " . $result->getAge() . "<br>";


echo "Degree: " . $result->getDegree() . "<br>";
?>