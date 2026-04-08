<?php
require_once("student_class.php");

class StudentDetails extends Student
{

// child class

  public $address;

  function __construct($_id, $_name, $_address)
  {
    parent::__construct($_id, $_name);
    $this->address = $_address; //address store
  }

  public function csv() //parent class csv override kore
  {
    return $this->id . "," . $this->name . "," . $this->address;
  }
}
?>