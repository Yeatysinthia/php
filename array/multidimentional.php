<?php
$marry = array(
    array(3,6,4,2),
    array(3,6,4,2),
    array(3,6,4,2),
);

print_r($marry);

echo"<br>";

$arr = [
    ["A", "t", "r", "r", "W"],
    ["B", "C", "y", "s", "j"],
    [3, 5, 2, 1, 7],
];
print_r($arr);
echo "<br>";

//for loop

$marry = [];

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 4; $j++){
        $data = [3,6,4,2];
        $marry[$i][$j] = $data[$j];
    }
}

print_r($marry);

echo "<br>";

//2nd array
$arr = [];

$data = [
    ["A", "t", "r", "r", "W"],
    ["B", "C", "y", "s", "j"],
    [3, 5, 2, 1, 7],
];

for($i = 0; $i < count($data); $i++){
    for($j = 0; $j < count($data[$i]); $j++){
        $arr[$i][$j] = $data[$i][$j];
    }
}

print_r($arr);


// 2D row number

$array = [
    ['A', 't', 'r'],
    ['B', 'C', 'y'],
    [3, 5, 2]
];

foreach ($array as $rowIndex => $row) {
    echo "<h3>Row number $rowIndex</h3>";
    
    echo "<ul>";
    foreach ($row as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}

//3D multidimentional array

$store = [

    "Electronics" => [
        "Mobile" => ["iPhone", "Samsung", "Xiaomi"],
        "Laptop" => ["HP", "Dell", "Lenovo"]
    ],

    "Clothing" => [
        "Men" => ["Shirt", "Pant", "Jacket"],
        "Women" => ["Saree", "Salwar", "Top"]
    ]

];

print_r($store);

foreach ($store as $category => $subcategories) {

    echo "<h2>Category: $category</h2>";

    foreach ($subcategories as $subcategory => $products) {

        echo "<h3>Subcategory: $subcategory</h3>";
        echo "<ul>";

        foreach ($products as $product) {
            echo "<li>$product</li>";
        }

        echo "</ul>";
    }
}




$array = [1, 2, 3];

for($i = 0; $i < count($array); $i++){
    print_r($array[$i]);
}


//diff aray
$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5];

$result = array_diff($array1, $array2);

print_r($result);


//2nd
$one=array(2,4,4);
$two=array(3,1,5);
$three=array(2,1,7);
$diff=array_diff($one,$two,$three);
print_r($diff);



?>