<?php
class Student {
    public $id;
    public $name;

    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

  
    function store() {
        $data = $this->id . "," . $this->name . "\n";
        file_put_contents("students.txt", $data, FILE_APPEND);
    }


    static function display_students() {
        if (file_exists("students.txt")) {
            $students = file("students.txt");

            echo "<h3>Student List:</h3>";

            foreach ($students as $student) {
                list($id, $name) = explode(",", trim($student));
                echo "ID: $id | Name: $name <br>";
            }
        } else {
            echo "No data found.";
        }
    }
}
?>