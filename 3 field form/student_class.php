<?php
class Student
{
  protected $id;
  public $name;

  protected static $file_path = "data.txt";

  function __construct($_id, $_name)
  {
    $this->id = $_id;
    $this->name = $_name;
  }

  public function csv()
  {
    return $this->id . "," . $this->name;
  }

  public function store()
  {
    file_put_contents(self::$file_path, $this->csv() . PHP_EOL, FILE_APPEND);
  }

  public static function display_students()
  {
    if (!file_exists(self::$file_path)) {

    }

    $students = file(self::$file_path);

    echo "<b>ID | Name | Address</b><br/>";

    foreach ($students as $d) {
      $data = explode(",", trim($d));

      $id = $data[0];
      $name = $data[1];
      $address = $data[2];

      echo "$id | $name | $address<br/>";
    }
  }
}
?>