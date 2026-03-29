<?php
class Student
{
    public $name;
    public $age;
    public $address;
    public $id;
    public $subject;

    public function details($n)
    {
        echo "My name is" .
        $this->name = $n;

    }

    public function __construct() 
    {
        echo "hello student";
    }

    public function __destruct()
    {
        echo "<br> bye";
    }
}

class Teacher extends student
{
    public $experience;
    public function teacherDetails()
    {
        echo "hello teacher";
    }
}
class Authority extends teacher
{
    public $position = "consultant";
    public function __construct()
    {
        echo "hello wdpf";
    }
    public function isdb()
    {
        echo "Result is published";
    }
}
$st = new student();
echo "<br>";
$tr = new teacher();
echo "<br>";
$tr->teacherDetails(); 
echo "<br>";
$au = new Authority();
echo "<br>";
echo $au->position;
echo "<br>";
$au->isdb();
?>