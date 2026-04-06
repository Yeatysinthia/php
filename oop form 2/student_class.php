<?php
class Student
{
  private $id;
  public $name;

  private static $file_path = "data.txt";

  function __construct($_id, $_name)
  {
    $this->id = $_id;
    $this->name = $_name;
  }

  public function csv()
  {
    return $this->id . "," . $this->name . PHP_EOL; 
  }

  public function store()
  {
  
    file_put_contents(self::$file_path, $this->csv(), FILE_APPEND);
    

  }

  public static function display_students()
  {

    $students = file(self::$file_path);

    echo "<b>ID | Name</b><br/>";
    foreach ($students as $d) {
      list($id, $name) = explode(",", trim("$d"));
      echo "$id | $name<br/>";
    }
  }
  
}