<?php
require_once("student_class.php");

class StudentDetails extends Student
{
  public $batch;

  function __construct($_id, $_name, $_batch)
  {
    parent::__construct($_id, $_name);
    $this->batch = $_batch;
  }

  public function csv()
  {
    return $this->id . "," . $this->name . "," . $this->batch;
  }
}
?>