<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=testjson", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function add($id, $name, $img, $price)
{
    global $conn;
    $sql = "INSERT INTO `product`(`id`, `name`, `img`, `price`) VALUES (:id, :name, :img, :price)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':price', $price);
    $stmt->execute();
}

function show()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM product ORDER BY id DESC");
    $stmt->execute();
    $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($kq);
}

// Add product if name is provided
if (isset($_GET['id']) && ($_GET['id'] !== "")) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

if (isset($_GET['name']) && ($_GET['name'] !== "")) {
    $name = $_GET['name'];
} else {
    $name = "";
}

if (isset($_GET['img']) && ($_GET['img'] !== "")) {
    $img = $_GET['img'];
} else {
    $img = "";
}

if (isset($_GET['price']) && ($_GET['price'] !== "")) {
    $price = $_GET['price'];
} else {
    $price = 0;
}

if ($name != "") {
    add($id, $name, $img, $price);
}

// Show all products
$kq = show();
var_dump($kq);
echo $kq;

//luu file
$myfile = fopen("product.json", "w") or die("unable to open");
json_encode($kq);
fwrite($myfile, $kq);
fclose($myfile);

echo $kq;
