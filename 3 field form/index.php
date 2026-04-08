<?php
require_once("student_details.php");

if (isset($_POST["btnSubmit"])) {

  $id = $_POST["txtId"];
  $name = $_POST["txtName"];
  $address = $_POST["txtAddress"]; //input field name

  if ($id != "" && $name != "" && $address != "") { //input empty ki na check

    $student = new StudentDetails($id, $name, $address);
    $student->store();
  } else {
    $message = "All fields are required!";
  }
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

  <form action="#" method="post">

    <div class="form-group">
      <label>ID</label>
      <input type="text" name="txtId" required>
    </div>

    <div class="form-group">
      <label>Name</label>
      <input type="text" name="txtName" required>
    </div>

    <div class="form-group">
      <label>Address</label>
      <input type="text" name="txtAddress" required>
    </div>

    <input type="submit" name="btnSubmit" value="Submit" class="btn">

  </form>

  <div class="table">
    <?php
    Student::display_students();
    ?>
  </div>

</div>

</body>
</html>