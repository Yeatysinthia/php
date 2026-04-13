<?php
class Student
{
  public $id;
  public $name;

  public static $file_path = "data.txt";

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

  // 🔥 FIXED DISPLAY (3 fields support)
  public static function display_students()
  {
    if (!file_exists(self::$file_path)) return;

    $students = file(self::$file_path);

    echo "<b>ID | Name | Batch</b><br/><br/>";

    foreach ($students as $line) {

      $data = explode(",", trim($line));

      if (count($data) < 3) continue;

      echo $data[0] . " | " . $data[1] . " | " . $data[2] . "<br/>";
    }
  }

  // 🔥 FIXED SEARCH (MAIN SOLUTION)
  public static function searchById($searchId)
  {
    if (!file_exists(self::$file_path)) {
      echo "No data found!";
      return;
    }

    $students = file(self::$file_path);
    $found = false;

    foreach ($students as $line) {

      $data = explode(",", trim($line));

      if (count($data) < 3) continue;

      if (trim($data[0]) == trim($searchId)) {

        echo "<b>Result Found:</b><br/><br/>";
        echo "ID: " . $data[0] . "<br/>";
        echo "Name: " . $data[1] . "<br/>";
        echo "Batch: " . $data[2] . "<br/>";

        $found = true;
        break;
      }
    }

    if (!$found) {
      echo "Student not found!";
    }
  }
}
?>