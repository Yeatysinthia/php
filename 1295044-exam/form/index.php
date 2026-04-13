<?php
require_once("student_details.php");

if (isset($_POST["btnSubmit"])) {

  $id = $_POST["txtId"];
  $name = $_POST["txtName"];
  $batch = $_POST["txtBatch"];

  if ($id != "" && $name != "" && $batch != "") {

    $student = new StudentDetails($id, $name, $batch);
    $student->store();

    echo "Data Saved Successfully!";
  } else {
    echo "All fields are required!";
  }
}


if (isset($_POST["btnSearch"])) {
  $searchId = $_POST["searchId"];
  Student::searchById($searchId);
}
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Student Form</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: #fff;
      padding: 25px;
      width: 320px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
      transition: 0.3s;
    }

    input[type="text"]:focus {
      border-color: #007bff;
    }

    .btn {
      width: 100%;
      padding: 10px;
      background: #007bff;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background: #0056b3;
    }

    .table {
      margin-top: 20px;
      font-size: 14px;
    }
  </style>
</head>

<body>

<div class="container">
  <h2>Student Form</h2>

  <form method="post">

  <h3>Add Student</h3>

  <input type="text" name="txtId" placeholder="ID"><br><br>
  <input type="text" name="txtName" placeholder="Name"><br><br>
  <input type="text" name="txtBatch" placeholder="Batch"><br><br>

  <input type="submit" name="btnSubmit" value="Save"><br><br>

  <hr>

  <h3>Search Student by ID</h3>

  <input type="text" name="searchId" placeholder="Enter ID"><br><br>
  <input type="submit" name="btnSearch" value="Search">

</form>

<hr>

<?php
Student::display_students();
?>
  </div>

</div>

</body>
</html>