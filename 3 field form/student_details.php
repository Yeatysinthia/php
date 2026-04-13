<?php
require_once("student_class.php");

class StudentDetails extends Student
{



  public $address;

  function __construct($_id, $_name, $_address)
  {
    parent::__construct($_id, $_name);
    $this->address = $_address; 
  }

  public function csv() 
  {
    return $this->id . "," . $this->name . "," . $this->address;
  }
}
?>

