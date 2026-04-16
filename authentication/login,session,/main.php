<?php
session_start();

if(!isset($_SESSION['user'])){
    header("location: login.php");
    exit();
}

$msg = "";

/* LOGOUT */
if(isset($_POST['logout'])){
    session_destroy();
    header("location: login.php");
    exit();
}

/* UPLOAD */
if(isset($_POST['Upload'])){

    $fileName = $_FILES['myfile']['name'];
    $tmp = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    $price = $_POST['price'];

    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowed = ["jpg","jpeg","png"];

    if($size > 2*1024*1024){
        $msg = "Max 2MB allowed!";
    }
    elseif(!in_array($ext,$allowed)){
        $msg = "Only JPG/PNG allowed!";
    }
    else {

        $newName = time()."_".$fileName;

        $path = __DIR__ . "/images/";

        if(!is_dir($path)){
            mkdir($path,0777,true);
        }

        if(move_uploaded_file($tmp,$path.$newName)){

            file_put_contents(
                __DIR__ . "/products.txt",
                $newName . "," . $price . "\r\n",
                FILE_APPEND
            );

            $msg = "Upload successful!";
        }
    }
}

/* LOAD PRODUCTS */
$products = [];

$file = __DIR__ . "/products.txt";

if(file_exists($file)){
    $lines = file($file);

    foreach($lines as $line){
        $parts = explode(",", trim($line));
        if(count($parts) < 2) continue;

        $products[] = [
            "img"=>$parts[0],
            "price"=>$parts[1]
        ];
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>
body{
    margin:0;
    font-family:Arial, sans-serif;
    background:#f0f2f5;
}

/* NAVBAR */
.navbar{
    background:#4a63e7;
    color:#fff;
    padding:12px 20px;
}

.logo{
    font-size:20px;
    font-weight:bold;
}

/* CONTAINER */
.container{
    display:flex;
    justify-content:center;
    margin-top:30px;
}

/* BOX */
.box{
    background:#fff;
    width:300px;
    padding:20px;
    border-radius:8px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    text-align:center;
}

/* INPUT + BUTTON */
input, button{
    width:100%;
    padding:8px;
    margin:6px 0;
    border-radius:5px;
    border:1px solid #ccc;
}

/* BUTTON STYLE */
button{
    background:#4a63e7;
    color:white;
    border:none;
    cursor:pointer;
}

button:hover{
    background:#3a4fc0;
}

/* TABLE */
.table-container{
    width:90%;
    margin:30px auto;
}

table{
    width:100%;
    border-collapse:collapse;
    background:#fff;
}

th, td{
    padding:8px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

th{
    background:#4a63e7;
    color:white;
}

/* IMAGE */
img{
    width:70px;
    border-radius:5px;
}
</style>

</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">SINTHIA</div>
</div>

<!-- UPLOAD -->
<div class="container">
<div class="box">

<h3>Welcome <?php echo $_SESSION['user']; ?></h3>

<form method="post" enctype="multipart/form-data">
<input type="file" name="myfile" required>
<input type="number" name="price" placeholder="Enter Price" required>
<button class="upload-btn" name="Upload">Upload</button>
</form>

<form method="post">
<button class="logout-btn" name="logout">Logout</button>
</form>

<p><?php echo $msg; ?></p>

</div>
</div>

<!-- TABLE -->
<div class="table-container">
<table>
<tr>
    
<th>NAME</th>
<th>IMAGE</th>
<th>PRICE</th>
<th>ADD TO CART</th>
</tr>

<?php foreach($products as $p){ ?>
<tr>
<td><?php echo $p['img']; ?></td>
<td><img src="images/<?php echo $p['img']; ?>"></td>
<td>$<?php echo $p['price']; ?></td>
<td><button>Add to Cart</button></td>
</tr>
<?php } ?>

</table>
</div>

</body>
</html>