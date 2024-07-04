<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=dbtrangwebbanhang", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function addProduct($product_id, $name, $description, $price, $stock, $category_id, $created_at)
{
    global $conn;
    $sql = "INSERT INTO `products`(`product_id`, `name`, `description`, `price`,`stock`,`category_id`,`created_at`) VALUES (:product_id, :name, :description, :price, :stock, :category_id, :created_at)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':stock', $stock);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':created_at', $created_at);
    $stmt->execute();
}

function show()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM products ORDER BY product_id DESC");
    $stmt->execute();
    $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($kq);
}

// Add product if name is provided
if (isset($_GET['product_id']) && ($_GET['product_id'] !== "")) {
    $product_id = $_GET['product_id'];
} else {
    $product_id = 0;
}

if (isset($_GET['name']) && ($_GET['name'] !== "")) {
    $name = $_GET['name'];
} else {
    $name = "";
}

if (isset($_GET['description']) && ($_GET['description'] !== "")) {
    $description = $_GET['description'];
} else {
    $description = "";
}
if (isset($_GET['price']) && ($_GET['price'] !== "")) {
    $price = $_GET['price'];
} else {
    $price = "";
}

if (isset($_GET['price']) && ($_GET['stock'] !== "")) {
    $stock = $_GET['stock'];
} else {
    $stock = 0;
}
if (isset($_GET['category_id']) && ($_GET['category_id'] !== "")) {
    $category_id = $_GET['category_id'];
} else {
    $category_id = 0;
}
if (isset($_GET['created_at']) && ($_GET['created_at'] !== "")) {
    $created_at = $_GET['created_at'];
} else {
    $created_at = 0;
}

if ($name != "") {
    addProduct($product_id, $name, $description, $price, $stock, $category_id, $created_at);
}

// Show all products
$kq = show();
// var_dump($kq);
echo $kq;

//luu file
// $myfile = fopen("product.json", "w") or die("unable to open");
// json_encode($kq);
// fwrite($myfile, $kq);
// fclose($myfile);

// echo $kq;
